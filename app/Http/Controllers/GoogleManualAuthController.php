<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use GuzzleHttp\Client;

class GoogleManualAuthController extends Controller
{
    /**
     * Redirect the user to Google OAuth consent screen
     */
    public function redirect()
    {
        $clientId = config('app.google_client_id', env('GOOGLE_CLIENT_ID'));
        $redirectUri = config('app.google_redirect_uri', env('GOOGLE_REDIRECT_URI'));

        $state = Str::random(32);
        session(['google_oauth_state' => $state]);

        $params = http_build_query([
            'client_id' => $clientId,
            'redirect_uri' => $redirectUri,
            'response_type' => 'code',
            'scope' => 'openid email profile',
            'access_type' => 'offline',
            'include_granted_scopes' => 'true',
            'prompt' => 'select_account',
            'state' => $state,
        ]);

        return redirect('https://accounts.google.com/o/oauth2/v2/auth?' . $params);
    }

    /**
     * Handle the callback from Google
     */
    public function callback(Request $request)
    {
        if ($request->has('error')) {
            return redirect()->route('login')->with('error', 'Google authentication canceled.');
        }

        $state = $request->get('state');
        if (!$state || $state !== session('google_oauth_state')) {
            return redirect()->route('login')->with('error', 'Invalid OAuth state. Please try again.');
        }

        $code = $request->get('code');
        if (!$code) {
            return redirect()->route('login')->with('error', 'Authorization code not received.');
        }

        try {
            $client = new Client(['timeout' => 10]);

            // Exchange code for tokens
            $tokenRes = $client->post('https://oauth2.googleapis.com/token', [
                'form_params' => [
                    'code' => $code,
                    'client_id' => env('GOOGLE_CLIENT_ID'),
                    'client_secret' => env('GOOGLE_CLIENT_SECRET'),
                    'redirect_uri' => env('GOOGLE_REDIRECT_URI'),
                    'grant_type' => 'authorization_code',
                ],
                'http_errors' => false,
            ]);

            $tokenBody = json_decode((string) $tokenRes->getBody(), true) ?? [];
            if (!isset($tokenBody['access_token'])) {
                Log::error('Google token exchange failed', ['response' => $tokenBody]);
                return redirect()->route('login')->with('error', 'Could not sign in with Google (token).');
            }

            $accessToken = $tokenBody['access_token'];

            // Fetch userinfo via OpenID Connect endpoint
            $userRes = $client->get('https://openidconnect.googleapis.com/v1/userinfo', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'http_errors' => false,
            ]);

            $profile = json_decode((string) $userRes->getBody(), true) ?? [];
            if (!isset($profile['email'])) {
                Log::error('Google userinfo missing email', ['profile' => $profile]);
                return redirect()->route('login')->with('error', 'Google profile did not return an email.');
            }

            $email = $profile['email'];
            $name = $profile['name'] ?? ($profile['given_name'] ?? 'Google User');
            $googleId = $profile['sub'] ?? null; // OpenID subject
            $avatar = $profile['picture'] ?? null;

            // Create or update user (no need to make password nullable; set random hash)
            $user = User::where('email', $email)->first();
            if ($user) {
                $user->fill([
                    'name' => $name,
                ]);
                // Update optional columns if they exist
                if (schema_has_column('users', 'google_id')) $user->google_id = $googleId;
                if (schema_has_column('users', 'avatar')) $user->avatar = $avatar;
                if (!$user->email_verified_at) $user->email_verified_at = now();
                $user->save();
            } else {
                $data = [
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make(Str::random(40)),
                    'email_verified_at' => now(),
                ];
                if (schema_has_column('users', 'google_id')) $data['google_id'] = $googleId;
                if (schema_has_column('users', 'avatar')) $data['avatar'] = $avatar;
                $user = User::create($data);
            }

            Auth::login($user, true);
            $request->session()->regenerate();

            Log::info('Google manual login success', [
                'user_id' => $user->id,
                'email' => $user->email,
            ]);

            return redirect()->intended('/home');
        } catch (\Throwable $e) {
            Log::error('Google manual auth error', ['message' => $e->getMessage()]);
            return redirect()->route('login')->with('error', 'Google login failed: ' . $e->getMessage());
        }
    }
}

if (!function_exists('schema_has_column')) {
    /**
     * Safe helper to check schema column existence without crashing during tests/migrations
     */
    function schema_has_column(string $table, string $column): bool
    {
        try {
            return \Illuminate\Support\Facades\Schema::hasColumn($table, $column);
        } catch (\Throwable $e) {
            return false;
        }
    }
}
