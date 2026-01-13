<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use PhpParser\Node\Expr\FuncCall;

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
    public function destruir($id){
        $libro=Libro::findOrFail($id);
        $libro->delete();
        return redirect()->route('libros.index');
    }
    public function edit($id){
    $libro=Libro::findOrFail($id);
    return view('libros.edit',['libro'=>$libro]);
    }

    public function update(Request $request,$id){
        $request->validate([
        'titulo'=>'required',
        'precio'=>'required|numeric'
        ]);
        $libro=Libro::findOrFail($id);
            $libro->update($request->all());
            return redirect()->route('libros.index');
        }
    
}