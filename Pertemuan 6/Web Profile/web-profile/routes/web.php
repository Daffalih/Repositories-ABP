<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', [ProfileController::class, 'home']);
Route::get('/about', [ProfileController::class, 'about']);
Route::get('/skills', [ProfileController::class, 'skills']);
Route::get('/experience', [ProfileController::class, 'experience']);