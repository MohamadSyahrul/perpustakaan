<?php

use App\Http\Middleware\Admin;
use App\Http\Middleware\Siswa;
use App\Model\Kegiatan;
use App\Model\Tentang;
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
Auth::routes();

Route::get('/', function () {
    $about = Tentang::all();
    $kgt = Kegiatan::paginate(3);


    return view('pages.frontend.home',[
        'about'=>$about,
        'kgt'=>$kgt,
    ]);
});
Route::get('/tentang', function () {
    $about = Tentang::all();
    return view('pages.frontend.tentang',[
        'about'=>$about
    ]);
});
Route::get('/kegiatan', function () {
    $kgt = Kegiatan::all();


    return view('pages.frontend.kegiatan',[
        'kgt'=>$kgt,
    ]);
});

Route::middleware('auth')->group(function () {   
    Route::get('/home', function () {
        return view('pages.admin.dashboard');
    })->name('home');
});


Route::prefix('admin')->middleware([Admin::class, 'auth'])->group(function () {


    Route::resource('management-anggota', 'Admin\UserController');
    Route::resource('management-tentang', 'Admin\TentangController');
    Route::resource('management-kegiatan', 'Admin\KegiatanController');

    Route::resource('kategori', 'Admin\KategoriController');
    Route::resource('rak', 'Admin\RakController');
    Route::resource('data-buku', 'Admin\BukuController');

    Route::resource('peminjaman', 'Admin\PinjamController');



});

Route::prefix('siswa')->middleware([Siswa::class, 'auth'])->group(function () {

});
