<?php

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

    return view('pages.frontend.home',[
        'about'=>$about
    ]);
});
Route::get('/tentang', function () {
    $about = Tentang::all();
    return view('pages.frontend.tentang',[
        'about'=>$about
    ]);
});
Route::get('/kegiatan', function () {
    return view('pages.frontend.kegiatan');
});


Route::get('/home', function () {
    return view('pages.admin.dashboard');
})->name('home');

Route::resource('management-anggota', 'Admin\UserController');
Route::resource('management-tentang', 'Admin\TentangController');

