<?php

use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('auth.register');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('auth.login');

Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])->middleware('auth')->name('logout');