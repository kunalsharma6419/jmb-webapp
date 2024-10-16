<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsSuperAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is logged in and is a superadmin
        if (Auth::check() && Auth::user()->is_superadmin) {
            return $next($request); // Allow access
        }

        // Redirect if the user is not a superadmin
        return redirect('/dashboard')->with('error', 'Unauthorized Access');
    }
}
