<?php

namespace App\Http\Controllers\Admin;

use App\Divisi;
use App\Http\Controllers\Controller;
use App\Jabatan;
use App\Keanggotaan;
use Illuminate\Http\Request;

class KeanggotaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keanggotaan = Keanggotaan::all();
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
        return view('pages.admin.keanggotaan.create', compact('keanggotaan', 'jabatan', 'divisi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $keanggotaan = new Keanggotaan();
        // $keanggotaan->name = $request->name;
        // $keanggotaan->username = $request->username;
        // $keanggotaan->no_anggota = $request->no_anggota;
        // $keanggotaan->email = $request->email;
        // $keanggotaan->jabatan_id = $request->jabatan_id;
        // $keanggotaan->divisi_id = $request->divisi_id;

        
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
        return view('pages.admin.keanggotaan.edit', compact('keanggotaan', 'jabatan', 'divisi'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}