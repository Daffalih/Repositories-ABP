<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

// route mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);