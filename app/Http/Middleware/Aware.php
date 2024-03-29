<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Aware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->roles->first()->id >= 2) {
                return $next($request);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect("/login");
        }
    }
}
