<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modul;
use App\User;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modul = Modul::all();
        $user = User::all();

        return view('pages.admin.modul.index', compact('modul', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();

        return view('pages.admin.modul.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modul = new Modul();
        $modul->title = $request->title;
        $modul->user_id = Auth::id();
        $modul->slug = Str::slug($request->title);
        $modul->description = $request->description;
        $modul['file'] = $request->file('file')->store(
            'assets/files', 'public'
        );

        $modul->save();

        return redirect()->route('modul.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modul = Modul::findOrFail($id);
        $user = User::all();

        // $pdf = PDF::loadView('pages.admin.modul.show', compact('modul', 'user'));
        // return $pdf->download('data_pasien.pdf');
        // return $pdf->stream();

        return view('pages.admin.modul.show', compact('modul', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
