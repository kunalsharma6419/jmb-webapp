<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();

            // Check the profile status
            if ($user->profile_status !== 'activated') {
                // Log out the user
                Auth::logout();

                // Invalidate the session
                $request->session()->invalidate();

                // Regenerate the session token
                $request->session()->regenerateToken();

                // Redirect to the login page with an error message
                return redirect()->route('login')->with('error', 'Your account is ' . $user->profile_status . '. Please contact the administrator.');
            }
        }

        return $next($request);
    }
}
