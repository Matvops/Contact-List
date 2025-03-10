<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SignInController;
use App\Http\Middleware\UserIsLogged;
use App\Http\Middleware\UserIsNotLogged;
use Illuminate\Support\Facades\Route;

//NonLogged
Route::middleware(UserIsNotLogged::class)->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/authLogin', [AuthController::class, 'loginSubmit'])->name('authLogin');
    Route::get('/createAccount', [SignInController::class, 'SignIn'])->name('sign');
    Route::post('/createAccountSubmit', [SignInController::class, 'SignInSubmit'])->name('signSubmit');
});

//Logged
Route::middleware(UserIsLogged::class)->group(function () {
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/updateContact/{id}', [MainController::class, 'update'])->name('update');
    Route::post('/updateContactSubmit', [MainController::class, 'updateSubmit'])->name('updateSubmit');
    Route::delete('/deleteContact/{id}', [MainController::class, 'delete'])->name('delete');
});
