<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\LibroController; 
Route::get('/', function () {
    return view('welcome');
});


    
Route::get('/saludo', [SitioController::class, 'saludo']);

// <--- No olvides esto

// ... otras rutas ...

Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');
?>
