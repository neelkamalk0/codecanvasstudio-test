<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class GuestWithMessage
{
    public function handle($request, Closure $next, ...$guards)
    {
        $guard = $guards[0] ?? null;

        if (Auth::guard($guard)->check()) {
            return redirect()->route('home')->with('message', 'You are already logged in.');
        }

        return $next($request);
    }
}
