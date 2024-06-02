<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/layanan', function () {
    return view('frontend.pages.layanan');
});

