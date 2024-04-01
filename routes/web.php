<?php

use App\Http\Controllers\BeverageController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\Dimsum;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\MakananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/dashboard', [dashboardController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [registerController::class, 'index'])->name('register');

Route::get('/makanan', [MakananController::class, 'index'])->name('index');

Route::get('/dimsum', [Dimsum::class, 'dimsum'])->name('dimsum');

Route::get('/beverage', [BeverageController::class, 'beverage'])->name('beverage');
