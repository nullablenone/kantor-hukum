<?php

use App\Http\Controllers\PengacaraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;

Route::get('/', function () {
    return view('frontend.pages.index');
});

Route::resource('layanan', LayananController::class);
Route::resource('pengacara', PengacaraController::class);

