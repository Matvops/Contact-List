<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authLogin', [AuthController::class, 'loginSubmit'])->name('authLogin');
