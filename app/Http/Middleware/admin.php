<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()) {
            if (Auth::user()->role == "admin") {
                return $next($request);
            } else {
                return redirect()->back()->with('danger', 'You are not allowed to access this page!');
            }
        } else {
            return redirect('/login')->with('danger', 'You are not logged in!');
        }
    }
}