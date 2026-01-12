<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
class LibroController extends Controller
{
    public function index(){
        $libros=Libro::all();
        return view('libros.index',['lista_libros'=>$libros]);
    }
}
