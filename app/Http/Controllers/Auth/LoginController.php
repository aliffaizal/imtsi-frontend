<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected function redirect(){
    //     if (Auth::check() && Auth::user()->roles == 'ADMIN') {
    //         # code...
    //         return redirect('/admin');
    //     } elseif (Auth::check() && Auth::user()->roles == 'USER') {
    //         # code...
    //         return redirect('/user');
    //     } else {
    //         return('/');
    //     }
    // }

    protected function redirectTo( ) {
        if (Auth::check() && Auth::user()->roles == 'ADMIN') {
            return('/admin');
        }
        elseif (Auth::check() && Auth::user()->roles == 'USER') {
            return('/user');
        }
        else {
            return('/');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
