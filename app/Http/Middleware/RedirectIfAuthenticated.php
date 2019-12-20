<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @param  string|null  $guard
   * @return mixed
   */
  public function handle($request, Closure $next, $guard = null)
  {
    switch ($guard) {
      case 'admin':
        if (Auth::guard($guard)->check()) { // check to see if logged in as admin
          return redirect()->route('admin.dashboard'); // rediected to admin dashboard
        }
        break;

      default:
        if (Auth::guard($guard)->check()) { // any other login
          return redirect('/home'); //redirect to home
        }
        break;
    }

    return $next($request); //next means go to the next request or start loading the page
  }
}


