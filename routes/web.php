<?php

use Illuminate\Support\Facades\Route;

// Mengarahkan halaman utama (/) ke file portfolio.blade.php
Route::get('/', function () {
    return view('portfolio');
});