<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create-users', [UserController::class, 'create'])->name('user.create');
Route::post('/store-users', [UserController::class, 'store'])->name('user.store');

