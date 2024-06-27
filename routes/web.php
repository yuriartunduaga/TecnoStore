<?php

use App\Http\Controllers\Clientes;
use App\Http\Controllers\Productos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/productos', Productos::class);
Route::resource('/clientes', Clientes::class);
Route::get('/', function () {
    return view('home');
});
