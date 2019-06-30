<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Oware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->hasAnyRole("Admin")) {
                return $next($request);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect("login");
        }
    }
}
