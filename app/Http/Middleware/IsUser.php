<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsUser
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
        if (Auth::check() && auth::user()->roles == 'USER') {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->roles == 'ADMIN') {
            # code...
            return redirect('/admin');
        } else {
            # code...
            return redirect('/');
        }
    }
}
