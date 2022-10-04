<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;

Route::get('/', [C_Home::class, 'HomePage']);

Route::get('/auth/login', [C_Auth::class, 'LoginPage']);
Route::post('/auth/login/proses', [C_Auth::class, 'LoginProses']);