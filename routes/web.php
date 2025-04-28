<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WelcomeController;

// Página de login
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');

// Página de bienvenida con productos (solo si ya estás logueado)
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

