<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminLoginShieldMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Read from config to ensure reliability under config caching
        $token = config('admin.login_token');
        // If a shield token is configured, require it
        if (!empty($token)) {
            // Accept token from query string for GET and from request input for POST forms
            $provided = $request->query('token') ?? $request->input('token');
            if ($provided !== $token) {
                abort(404);
            }
        }

        return $next($request);
    }
}
