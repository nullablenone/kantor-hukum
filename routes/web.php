<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\TentangKamiController;

// ---FRONTEND ROUTE
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


// ---BACKENDROUTE
//Dashboard
Route::prefix('admin')->group(function () {
    
    Route::resource('dashboard', DashboardController::class);
});

