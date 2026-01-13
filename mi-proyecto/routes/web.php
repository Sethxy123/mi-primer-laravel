<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\LibroController; 
Route::get('/', function () {
    return view('welcome');
});


    
Route::get('/saludo', [SitioController::class, 'saludo']);

// 1. Ruta para VER la lista (GET) <--- ¡ESTA ES LA QUE TE FALTA!
Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');

// 2. Ruta para VER el formulario (GET)
Route::get('/libros/crear', [LibroController::class, 'create'])->name('libros.create');

// 3. Ruta para GUARDAR los datos (POST)
Route::post('/librosCrear', [LibroController::class, 'store'])->name('libros.store');
//Ruta para borrar
Route::delete('/libros/{id}', [LibroController::class, 'destruir'])->name('libros.destroy');

// Muestra el formulario de edición
Route::get('/libros/{id}/edit', [LibroController::class, 'edit'])->name('libros.edit');

// Procesa la actualización (Nota que usamos PUT, no POST)
Route::put('/libros/{id}', [LibroController::class, 'update'])->name('libros.update');
?>
