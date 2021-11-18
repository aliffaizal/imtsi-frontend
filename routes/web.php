<?php

use App\Http\Controllers\Admin\ArtikelController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('register', 'Auth\RegisterController@create');

Route::view('profil', 'pages.profil');
Route::view('kegiatan', 'pages.kegiatan');
Route::post('register', 'Auth\RegisterController@register');

Route::prefix('admin')
->namespace('Admin')
->middleware(['auth', 'admin'])
->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('artikel', 'ArtikelController');
    // Route::resource('gallery', 'GalleryController');
    Route::resource('jabatan', 'JabatanController');
    Route::resource('divisi', 'DivisiController');
    Route::resource('keanggotaan', 'KeanggotaanController');
    Route::resource('user', 'UserController');
    Route::resource('modul', 'ModulController');
    Route::resource('wilayah', 'WilayahController');
    Route::resource('instansi', 'InstansiController');
    Route::get('password', 'ProfilController@password')->name('password');
    Route::patch('password/update', 'ProfilController@changePassword')->name('password.edit');
});


Route::prefix('user')
->namespace('User')
->middleware(['auth', 'user'])
->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('artikel', 'ArtikelController',[
        'as' => 'user'
    ]);
    // Route::resource('gallery', 'GalleryController');
    Route::resource('jabatan', 'JabatanController',[
        'as' => 'user'
    ]);
    Route::resource('divisi', 'DivisiController',[
        'as' => 'user'
    ]);
    Route::resource('keanggotaan', 'KeanggotaanController',[
        'as' => 'user'
    ]);
    // Route::resource('user', 'UserController');
    Route::resource('modul', 'ModulController',[
        'as' => 'user'
    ]);
    Route::resource('wilayah', 'WilayahController',[
        'as' => 'user'
    ]);
    Route::resource('instansi', 'InstansiController',[
        'as' => 'user'
    ]);
    Route::get('password', 'ProfilController@password')->name('user.password');
    Route::patch('password/update', 'ProfilController@changePassword')->name('user.password.edit');
});



Auth::routes();

