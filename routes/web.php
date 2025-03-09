<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//NonLogged
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authLogin', [AuthController::class, 'loginSubmit'])->name('authLogin');

//Logged
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/updateContact/{id}', [MainController::class, 'update'])->name('update');
Route::post('/updateContactSubmit', [MainController::class, 'updateSubmit'])->name('updateSubmit');
Route::delete('/deleteContact/{id}', [MainController::class, 'delete'])->name('delete');