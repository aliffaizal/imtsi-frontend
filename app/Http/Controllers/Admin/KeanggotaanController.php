<?php

namespace App\Http\Controllers\Admin;

use App\Divisi;
use App\Http\Controllers\Controller;
use App\Instansi;
use App\Jabatan;
use App\Keanggotaan;
use App\User;
use App\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KeanggotaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keanggotaan = Keanggotaan::paginate(10);
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();
        return view('pages.admin.keanggotaan.index', compact('keanggotaan', 'jabatan', 'divisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keanggotaan = Keanggotaan::all();
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();
        $instansi = Instansi::all();
        $wilayah = Wilayah::all();
        return view('pages.admin.keanggotaan.create', compact('keanggotaan', 'jabatan', 'divisi', 'instansi', 'wilayah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'username' => 'required',
            'no_anggota' => 'required|max:16',
            'roles' => 'required',
            'jabatan_id' => 'required',
            'divisi_id' => 'required',
            'instansi_id' => 'required',
            'wilayah_id' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect()->route('keanggotaan.index')->with('message', 'Data Berhasil Disimpan');


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
        $keanggotaan = Keanggotaan::findOrFail($id);
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();
        $instansi = Instansi::all();
        $wilayah = Wilayah::all();
        return view('pages.admin.keanggotaan.edit', compact('keanggotaan', 'jabatan', 'divisi', 'instansi', 'wilayah'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'username' => 'required',
            'no_anggota' => 'required|max:16',
            'jabatan_id' => 'required',
            'divisi_id' => 'required',
            'instansi_id' => 'required',
            'wilayah_id' => 'required',
        ]);

        $data = $request->all();
        $user = User::findOrFail($id);

        $user->update($data);

        return redirect()->route('keanggotaan.index')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keanggotaan = User::findOrFail($id);
        $keanggotaan->delete();

        return redirect()->back()->with('message', 'Data Berhasil Dihapus');
    }
}
