<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.login');
});

Route::get('/welcome', function () {
    return view('layout.welcome');
});

Route::get('/nosotros', function () {
    return view('layout.nosotros');
});
