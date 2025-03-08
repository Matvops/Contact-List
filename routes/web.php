<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//AUTH
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authLogin', [AuthController::class, 'loginSubmit'])->name('authLogin');

//MAIN
Route::get('/', [MainController::class, 'home'])->name('home');
