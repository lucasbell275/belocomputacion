<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadoraController;

Route::get('/', function () {
    return view('home');
});

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::resource('/computadoras', ComputadoraController::class);

