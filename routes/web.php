<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Categorias;
use Illuminate\Support\Facades\Route;

//Route::get('/', [Categorias::class, 'index']);
Route::get('/inicio', [Categorias::class, 'index'])->name('inicio');
Route::get('/servicios', [Categorias::class, 'servicios']);
Route::get('/create', [Categorias::class, 'create']);
Route::post('/store', [Categorias::class, 'store']);
Route::get('/edit/{id}', [Categorias::class, 'edit'])->name('edit');
Route::put('/update/{id}', [Categorias::class, 'update'])->name('update');
Route::get('/show/{id}', [Categorias::class, 'show'])->name('show');
Route::delete('/destroy/{id}', [Categorias::class, 'destroy'])->name('destroy');

Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/usuarioNuevo', [AuthController::class, 'agregarNuevo']);