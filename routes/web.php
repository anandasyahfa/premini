<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\MakananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('kerangka.master');
});

Route::get('/dashboard', [dashboardController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [registerController::class, 'index'])->name('register');

Route::get('/makanan', [MakananController::class, 'index'])->name('index');
