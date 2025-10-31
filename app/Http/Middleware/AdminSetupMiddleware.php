<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AdminSetupMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // If any admin already exists, block access entirely
        if (User::where('role', 'admin')->exists()) {
            abort(404);
        }

        // Read from config so behavior is consistent even when config is cached
        $token = config('admin.setup_token');

        $isGet = $request->isMethod('GET');
        $isPost = $request->isMethod('POST');

        // On GET: require token if configured; ignore any previous session bypass
        if ($isGet) {
            if (!empty($token)) {
                $provided = $request->query('token');
                if ($provided !== $token) {
                    abort(403, 'Admin setup token required');
                }
                // Mark verified so the subsequent POST can succeed without query token
                session(['admin_setup_verified' => true]);
                return $next($request);
            }
            // If token isn't configured and we're not local, still block
            if (!app()->environment('local')) {
                abort(403, 'Admin setup token required');
            }
            // Local with no token configured: allow
            return $next($request);
        }

        // On POST: allow if session was verified during GET or if a valid token is provided in the form
        if ($isPost) {
            if (session('admin_setup_verified') === true) {
                return $next($request);
            }
            if (!empty($token)) {
                $provided = $request->input('token') ?? $request->query('token');
                if ($provided === $token) {
                    return $next($request);
                }
                abort(403, 'Admin setup token required');
            }
            if (!app()->environment('local')) {
                abort(403, 'Admin setup token required');
            }
            return $next($request);
        }

        // For any other method, default to same rules as GET
        if (!empty($token)) {
            $provided = $request->query('token') ?? $request->input('token');
            if ($provided !== $token) {
                abort(403, 'Admin setup token required');
            }
        } elseif (!app()->environment('local')) {
            abort(403, 'Admin setup token required');
        }

        return $next($request);
    }
}
