<?php

namespace App\Http\Controllers\Admin;

use App\Divisi;
use App\Http\Controllers\Controller;
use App\Jabatan;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::paginate(10);
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();

        return view('pages.admin.manajemen_akses.index', compact('user', 'jabatan', 'divisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();

        return view('pages.admin.manajemen_akses.edit', compact('user', 'jabatan', 'divisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'roles' => 'required'
        ],[
            'roles.required' => 'Wajib diisi',
        ]);

        $data = $request->all();
        $user = User::findOrFail($id);

        $user->update($data);
        // dd($data);

        return redirect()->route('user.index')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('message', 'Data Berhasil Dihapus');
    }
}
