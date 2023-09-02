<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CategoriaController extends Controller
{
    public function index_categoria(){
        $categorias = Categoria::all($columns = ['*']);
 
        return view('admin.categoria.index_categoria',compact('categorias'));
    }
    public function create_categoria(){
        return view('admin.categoria.create_categoria');
    }
    public function store_categoria(Request $request){
        Categoria::create([
            'id_categoria' => $request->id_categoria,
            'nombre_categoria' => $request->nombre_categoria,
        ]);
        return redirect()->route('categoria.index');
    }
    public function edit_categoria(Categoria $categoria){
        
        return view('admin.categoria.edit_categoria',compact('categoria'));
    }
    public function update_categoria(Request $request,Categoria $categoria){
        $categoria->update([
            'id_categoria' => $request->id_categoria,
            'nombre_categoria' => $request->nombre_categoria,
        ]);

        return redirect()->route('categoria.index');
    }
    public function delete_categoria(Categoria $categoria){
        $categoria->delete();
        return redirect()->route('categoria.index');
    }

}

