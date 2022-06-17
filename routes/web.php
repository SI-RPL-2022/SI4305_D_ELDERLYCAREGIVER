<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\http\Livewire\Maps;
use App\http\Livewire\CreateMap;
use App\http\Livewire\CreateMapPengasuh;
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
    Route::get('/lokasi', Maps::class);
    Route::resource('/order', OrderController::class);
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
    Route::get('/infopengasuh/{id}', [UserController::class, 'detailuser']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, "loginview"])->name('login');
    Route::get('/regisuser', CreateMap::class);
    Route::get('/regispengasuh', CreateMapPengasuh::class);
    // Route::get('/regispengasuh', [UserController::class, "pengasuh"]);
    // Route::get('/regisuser', [UserController::class, "user"]);
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

Route::get('/infopengasuh', function () {
    return view('user/infopengasuh');
});
Route::get('/detailpesanan', function () {
    return view('user/detailpesanan');
});
Route::get('/chatuser', function () {
    return view('user/chatuser');
});
