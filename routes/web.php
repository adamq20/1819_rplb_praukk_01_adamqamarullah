<?php

use Illuminate\Support\Facades\Route;
// Untuk mengarahkan ke directory/folder Controller
use App\Http\Controllers\authController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\penumpangController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\ruteController;
use App\Http\Controllers\transportasiController;
use App\Http\Controllers\pemesananController;

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard/', [PagesController::class, 'getIndex']);
    Route::get('/profile', [PagesController::class, 'getProfile']);
    Route::patch('/profile', [PagesController::class, 'updateProfile']);
    Route::patch('/u/password', [PagesController::class, 'updatePassword']);
});

// Dashboard
Route::get('/dashboard/', [dashboardController::class, 'index']);

// Penumpang
Route::get('/penumpang/', [penumpangController::class, 'index']);
Route::get('/penumpang/signup', [penumpangController::class, 'create']);

// Petugas
Route::get('/petugas/', [petugasController::class, 'index']);

// Rute
Route::get('/rute/', [ruteController::class, 'index']);

// Transportasi
Route::get('/transportasi/', [transportasiController::class, 'index']);

// Pemesanan

// Auth
Route::group(['middleware' => ['guest']], function() {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'doLogin']);
});
