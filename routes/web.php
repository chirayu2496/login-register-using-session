<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;



Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login-show');
    Route::post('/login-verify', [LoginController::class, 'verify'])->name('login-verify');
    Route::get('/register', [RegisterController::class, 'index'])->name('register-show');
    Route::post('/register-store', [RegisterController::class, 'store'])->name('register-store');
});
