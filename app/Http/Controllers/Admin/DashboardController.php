<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Instansi;
use App\Modul;
use App\User;
use App\Wilayah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $total_anggota = User::all()->count();
        $total_provinsi = Wilayah::all()->count();
        $total_instansi = Instansi::all()->count();
        $total_modul = Modul::all()->count();
        return view('pages.admin.dashboard', compact('total_anggota', 'total_provinsi', 'total_instansi', 'total_modul'));
    }
}
