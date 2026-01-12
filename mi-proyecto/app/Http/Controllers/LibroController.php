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

    public function create(){
        return view('libros.create');
    }

    public function store(Request $request){
        $request->validate([
        'titulo'=>'required',
        'precio' =>'required|numeric'
        ]);
        Libro::create($request->all());
        return redirect()->route('libros.index');
    }
    
}
