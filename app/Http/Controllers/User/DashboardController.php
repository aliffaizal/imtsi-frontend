<?php

namespace App\Http\Controllers\User;

use App\Artikel;
use App\Http\Controllers\Controller;
use App\Instansi;
use App\Modul;
use App\User;
use App\Wilayah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $total_anggota = User::all()->count();
        $total_provinsi = Wilayah::all()->count();
        $total_instansi = Instansi::all()->count();
        $total_modul = Modul::all()->count();

        return view('pages.user.dashboard', compact('total_anggota', 'total_provinsi', 'total_instansi', 'total_modul'));
    }
}
