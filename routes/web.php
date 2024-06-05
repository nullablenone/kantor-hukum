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
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami.index');

// Route Layanan
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');

// Route Pengacara
Route::get('/pengacara', [PengacaraController::class, 'index'])->name('pengacara.index');


// Route Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');




// ---BACKENDROUTE
Route::prefix('admin')->group(function () {
    
    //Dashboard
    Route::resource('dashboard', DashboardController::class);

    //Layanan
    Route::get('/layanan', [LayananController::class, 'indexadmin'])->name('layanan.indexadmin');
    
});

