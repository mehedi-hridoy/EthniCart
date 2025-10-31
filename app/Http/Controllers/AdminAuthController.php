<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role === 'admin') {
                return redirect()->intended(route('admin.dashboard'));
            }
            Auth::logout();
        }

        return back()->withErrors(['message' => 'Invalid admin credentials.']);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        $loginToken = config('admin.login_token');
        return empty($loginToken)
            ? redirect()->route('admin.login')
            : redirect()->route('admin.login', ['token' => $loginToken]);
    }

    // First-time setup: only show if no admin exists
    public function showRegisterForm()
    {
        if (User::where('role','admin')->exists()) {
            return redirect()->route('admin.login');
        }
        return view('admin.register');
    }

    public function register(Request $request)
    {
        if (User::where('role','admin')->exists()) {
            return redirect()->route('admin.login');
        }

        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255','unique:users,email'],
            'password' => ['required','min:8','confirmed'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Do NOT auto-login. Show success and take them to the login page.
        // Clear any temporary setup verification from session
        $request->session()->forget('admin_setup_verified');

        $loginToken = config('admin.login_token');
        $redirect = empty($loginToken)
            ? redirect()->route('admin.login')
            : redirect()->route('admin.login', ['token' => $loginToken]);

        return $redirect->with('status', 'Admin created successfully. Please log in.');
    }
}
