<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
{
    // Validate credentials
    if (!Auth::attempt($request->only('email', 'password'))) {
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Check the profile status of the authenticated user
    $user = Auth::user();
    if ($user->profile_status === 'deactivated') {
        Auth::logout(); // Log out the user
        return back()->withErrors(['account' => 'Your account has been deactivated. Please contact the administrator.']);
    }

    if ($user->profile_status === 'hold') {
        Auth::logout(); // Log out the user
        return back()->withErrors(['account' => 'Your account is on hold. Please contact the administrator.']);
    }

    // Regenerate the session
    $request->session()->regenerate();

    // Redirect to intended route
    return redirect()->intended(RouteServiceProvider::HOME);
}


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
