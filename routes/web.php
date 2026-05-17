<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadoraController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;

Route::resource('/', HomeController::class);

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::resource('/computadoras', ComputadoraController::class);

Route::resource('/marcas', MarcasController::class) ;

Route::resource('/ofertas', OfertaController::class);

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

