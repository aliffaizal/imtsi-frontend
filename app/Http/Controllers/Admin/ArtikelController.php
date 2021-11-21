<?php

namespace App\Http\Controllers\Admin;

use App\Artikel;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::paginate(10);
        $user = User::all();

        return view('pages.admin.artikel.index', compact('artikel', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();

        return view('pages.admin.artikel.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $slug = Str::slug($request->title);
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'required',
        ]);

        $artikel = new Artikel();
        $artikel->title = $request->title;
        $artikel->user_id = Auth::id();
        $artikel->slug = Str::slug($request->title);
        $artikel->content = $request->content;
        $artikel['thumbnail'] = $request->file('thumbnail')->store(
            'assets/thumbnails', 'public'
        );

        $artikel->save();

        return redirect()->route('artikel.index')->with('message', 'Data Berhasil Disimpan');
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
        $artikel = Artikel::findOrFail($id);

        return view('pages.admin.artikel.edit', compact('artikel'));
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
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'required',
        ]);
        $artikel = Artikel::findOrFail($id);
        // $slug = Str::slug($request->title);

        $artikel->title = $request->title;
        $artikel->user_id = Auth::id();
        $artikel->slug = Str::slug($request->title);
        $artikel->content = $request->content;

        if ($request->thumbnail) {
            # menghapus gambar lama yang ada di storage
            Storage::disk('local')->delete('public/'.$artikel->thumbnail);
        }
        // request gambar untuk upload gambar baru
        $data['thumbnail'] = $request->file('thumbnail')->store(
            'assets/thumbnails', 'public'
        );

        $artikel->update($data);

        return redirect()->route('artikel.index')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $thumbnail = Storage::disk('local')->delete('public/'.$artikel->thumbnail);

        $artikel->delete();

        return redirect()->route('artikel.index')->with('message', 'Data Berhasil Dihapus');
    }
}
