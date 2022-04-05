<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AdminController;
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

    Route::get('/homepengasuh', function () {
        return view('pengasuh/homepengasuh'); });

        Route::post('/download', [UserController::class, "download"]);
        Route::post('/pelamar/deleted', [UserController::class, "pelamardel"]);
        Route::post('/pelamar/konfirmasi', [UserController::class, "konfirmasi"]);
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

Route::get('/detailuserpengasuh', function () {
    return view('admin/detailuserpengasuh');
});

Route::get('/detailuser', function () {
    return view('admin/detailuser');
});
