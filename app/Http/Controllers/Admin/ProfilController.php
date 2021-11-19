<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jabatan;
use App\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function password()
    {
        $user = User::findOrFail(Auth::user()->id);

        // return view('pages.admin.profil.changePassword');
        return view('pages.admin.profil.changePassword', compact('user'));
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
        return redirect()->back()->with('message', 'Password Berhasil Diubah');


    }
    // // untuk edit profil user
    // public function userProfil(){
    //     $user = User::findOrFail(Auth::user()->id);
    //     $jabatan = Jabatan::all();
    //     return view('pages.admin.profil.show', compact('user', 'jabatan'));
    // }

    // public function editUserProfil($id){
    //     $user = User::findOrFail(Auth::user()->id);
    //     $jabatan = Jabatan::all();
    //     return view('pages.admin.profil.edit', compact('user', 'jabatan'));
    // }

    // public function updateUserProfil(Request $request, $id){
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'username' => 'required',
    //         'no_anggota' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'jabatan_id' => 'required',
    //         'foto' => 'required'
    //     ]);

    //     $user = User::findOrFail($id);
    //     $user->name = $request->name;
    //     $user->username = $request->username;
    //     $user->no_anggota = $request->no_anggota;
    //     $user->email = $request->email;
    //     $user->jabatan_id = $request->jabatan_id;

    //     if ($request->foto) {
    //         # menghapus gambar lama yang ada di storage
    //         Storage::disk('local')->delete('public/'.$user->foto);
    //     }
    //     // request gambar untuk upload gambar baru
    //     $data['foto'] = $request->file('foto')->store(
    //         'assets/foto', 'public'
    //     );

    //     $user->update($data);

    //     dd($user);
    //     return redirect()->route('user.profil');


    // }



}
