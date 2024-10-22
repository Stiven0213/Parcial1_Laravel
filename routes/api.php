<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VideojuegoController;
use App\Http\Controllers\CategoriaController;

Route::apiResource('videojuegos', VideojuegoController::class);
Route::apiResource('categorias', CategoriaController::class);
