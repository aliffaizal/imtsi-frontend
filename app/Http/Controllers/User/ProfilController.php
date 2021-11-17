<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function password()
    {
        $user = User::findOrFail(Auth::user()->id);

        // return view('pages.admin.profil.changePassword');
        return view('pages.user.profil.changePassword', compact('user'));
        // return view('admin.user.changePassword', compact('user'));

    }

    public function changePassword(Request $request)
    {

        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $request->user()->update([
            'password' => Hash::make($request->get('password'))
        ]);

        Auth::logout();
        return redirect()->back();


    }
}
