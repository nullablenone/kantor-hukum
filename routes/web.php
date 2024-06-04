<?php

use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\TentangKamiController;

// Route Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');

// Route Tentang Kami
Route::resource('tentang-kami', TentangKamiController::class);

// Route Layanan
Route::resource('layanan', LayananController::class);

// Route Pengacara
Route::resource('pengacara', PengacaraController::class);

// Route Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

