<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\TentangKamiController;

Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

Route::resource('layanan', LayananController::class);
Route::resource('tentang-kami', TentangKamiController::class);
Route::resource('pengacara', PengacaraController::class);

