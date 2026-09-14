<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadoraController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\NosotrosController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\MarcasController as AdminMarcasController;
use App\Http\Controllers\Admin\IntentoContactoController as IntentoContactoController;
use App\Http\Controllers\UserController;


use App\Models\Nosotros;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');

Route::get('/registro', [UserController::class, 'showRegisterForm'])->name('registro');
Route::post('/registro', [UserController::class, 'register'])->name('registro.store');
Route::get('/user/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/user/login', [UserController::class, 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/admin/login', [RoleController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [RoleController::class, 'login'])->name('admin.login.store');

Route::get('/computadoras', [ComputadoraController::class, 'index'])->name('computadoras.index');

Route::resource('/marcas', MarcasController::class)->only(['index']);

Route::resource('/ofertas', OfertaController::class)->only(['index']);

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::redirect('/', '/admin/dashboard')->name('index');
    Route::get('/dashboard', [RoleController::class, 'dashboard'])->name('dashboard');
    Route::get('/indcompus', [ComputadoraController::class, 'AdminIndex'])->name('computadoras');
    Route::resource('/marcas', AdminMarcasController::class);
    Route::resource('/nosotros', NosotrosController::class)->only(['edit', 'update']);
    Route::resource('/contactosind', IntentoContactoController::class);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('/computadoras', ComputadoraController::class)->except(['index', 'show']);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/home/edit', [AdminHomeController::class, 'edit'])->name('home.edit');
    Route::put('/home/update', [AdminHomeController::class, 'update'])->name('home.update');
});

Route::get('/computadoras/{computadora}', [ComputadoraController::class, 'show'])->name('computadoras.show');
