<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
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


Route::middleware('auth')->group(function () {

    Route::resource('/profile', ProfileController::class)->parameters([
        'profile' => 'user:username',
    ]);
    Route::post('/download', [UserController::class, "download"]);
    Route::get('/detailuser/{user}', [UserController::class, "detail"]);
    Route::post('/pelamar/deleted', [UserController::class, "pelamardel"]);
    Route::post('/pelamar/konfirmasi', [UserController::class, "konfirmasi"]);
    Route::get('/cari', [ArtikelController::class, "index"]);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/homeartikel', [ArtikelController::class, "show"]);
    Route::get('/dashboard', [ArtikelController::class, "dashboard"]);
    Route::post('/postingartikel', [ArtikelController::class, "posting"]);
    Route::get('/artikel/edit/{id}', [ArtikelController::class, "editartikel"]);
    Route::post('/artikel/update/{id}', [ArtikelController::class, "updateArtikel"]);
    Route::get('/artikel/hapus/{id}', [ArtikelController::class, "hapusartikel"]);
    Route::get('/listpengasuh', [UserController::class, 'listpengasuh']);
    Route::get('/listuser', [UserController::class, 'listuser']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, "loginview"])->name('login');
    Route::get('/regispengasuh', [UserController::class, "pengasuh"]);
    Route::get('/regisuser', [UserController::class, "user"]);
    Route::post('/regispengasuh', [UserController::class, "registerpelamar"]);
    Route::post('/regisuser', [UserController::class, "registeruser"]);
    Route::post('/login', [UserController::class, "login"]);


});

Route::get('/', [ArtikelController::class, "index"]);
Route::get('/editprofilepengasuh', function () {
    return view('pengasuh/editprofilepengasuh');
});
Route::get('/editprofileuser', function () {
    return view('user/editprofile');
});
Route::get('/lokasi', function () {
    return view('user/lokasi');
});
Route::get('/infopengasuh', function () {
    return view('user/infopengasuh');
});

