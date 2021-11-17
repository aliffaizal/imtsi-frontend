<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //untuk mengecek apakah admin
        if (Auth::check() && Auth::user()->roles == 'ADMIN') {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->roles == 'USER') {
            # code...
            return redirect('/user');
        } else {
            # code...
            return redirect('/');
        }
    }
}
