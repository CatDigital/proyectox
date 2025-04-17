<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');

Route::get('/nosotros', function () {
    return view('layout.nosotros');
});


