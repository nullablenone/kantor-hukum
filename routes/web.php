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
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    
    //Layanan
    Route::get('/layanan', [LayananController::class, 'indexadmin'])->name('layanan.indexadmin');
    Route::get('/layanan/create', [LayananController::class, 'create'])->name('layanan.create');
    Route::post('/layanan', [LayananController::class, 'store'])->name('layanan.store');
    Route::get('/layanan/{layanan}/edit', [LayananController::class, 'edit'])->name('layanan.edit');
    Route::put('/layanan/{layanan}', [LayananController::class, 'update'])->name('layanan.update');
    Route::delete('/layanan/{layanan}', [LayananController::class, 'destroy'])->name('layanan.destroy');
    
    
    //Pengacara
    Route::get('/pengacara', [PengacaraController::class, 'indexadmin'])->name('pengacara.indexadmin');
    Route::get('/pengacara/create', [PengacaraController::class, 'create'])->name('pengacara.create');
    Route::post('/pengacara', [PengacaraController::class, 'store'])->name('pengacara.store');
    Route::get('/pengacara/{pengacara}/edit', [PengacaraController::class, 'edit'])->name('pengacara.edit');
    Route::put('/pengacara/{pengacara}', [PengacaraController::class, 'update'])->name('pengacara.update');
    Route::delete('/pengacara/{pengacara}', [PengacaraController::class, 'destroy'])->name('pengacara.destroy');
    
    
});

