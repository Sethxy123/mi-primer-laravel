<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    // Método para la página de saludo
    public function saludo() {
        $nombre = "Ingeniero";
        $proyecto = "Plataforma Educativa ITO";

        // Retornamos la vista igual que antes
        return view('mi_vista', [
            'nombre_usuario' => $nombre,
            'trabajo' => $proyecto
        ]);
    }
}