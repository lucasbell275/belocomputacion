<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadoraController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\RoleController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/login', [RoleController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RoleController::class, 'login'])->name('login.store');
Route::post('/logout', [RoleController::class, 'logout'])->name('logout');

Route::get('/computadoras', [ComputadoraController::class, 'index'])->name('computadoras.index');

Route::resource('/marcas', MarcasController::class)->only(['index']);

Route::resource('/ofertas', OfertaController::class)->only(['index']);

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::redirect('/', '/admin/dashboard')->name('index');
    Route::get('/dashboard', [RoleController::class, 'dashboard'])->name('dashboard');
    Route::get('/indcompus', [ComputadoraController::class, 'AdminIndex'])->name('computadoras');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('/computadoras', ComputadoraController::class)->except(['index', 'show']);
});

Route::get('/computadoras/{computadora}', [ComputadoraController::class, 'show'])->name('computadoras.show');
