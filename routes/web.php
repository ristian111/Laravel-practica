<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::resource('categorias', CategoriaController::class);
Route::resource('productos', ProductoController::class);

Route::get('/', function () {
    return view('welcome');
});
