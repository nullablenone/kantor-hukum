<?php

use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;

Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/dd', function () {
    return view('frontend.pages.index');
});

Route::resource('layanan', LayananController::class);
Route::resource('tentang-kami', TentangKamiController::class);
Route::resource('pengacara', PengacaraController::class);

