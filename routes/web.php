<?php

use Illuminate\Support\Facades\Route;
// Untuk mengarahkan ke directory/folder Controller
use App\Http\Controllers\authController;
use App\Http\Controllers\penumpangController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\ruteController;
use App\Http\Controllers\transportasiController;
use App\Http\Controllers\pemesananController;

Route::get('/', [authController::class, 'index']);
Route::get('/create', [authController::class, 'create']);

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
