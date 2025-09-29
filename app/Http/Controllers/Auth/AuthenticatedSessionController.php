<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
  /**
   * Show the login page.
   */
  public function create(Request $request): Response
  {
    return Inertia::render('auth/login', [
      'canResetPassword' => Route::has('password.request'),
      'status' => $request->session()->get('status'),
    ]);
  }

  /**
   * Handle an incoming authentication request.
   */
  public function store(LoginRequest $request): RedirectResponse
  {
    $request->authenticate();

    $request->session()->regenerate();


    $role = $request->user()->getRoleNames()->first();

    return match ($role) {
      'super-admin' => redirect()->intended(route('super-admin.dashboard', absolute: false)),
      'teacher' => redirect()->intended('/teacher/dashboard'),
      'student' => redirect()->intended('/student/dashboard'),
      default => redirect()->intended('/'),
    };

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
