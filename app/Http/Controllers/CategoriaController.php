<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\AwsS3V3\PortableVisibilityConverter;


class CategoriaController extends Controller
{
    public function index_categoria(){
        $categorias = Categoria::all($columns = ['*']);
 
        return view('admin.categoria.index_categoria',compact('categorias'));
    }
    public function create_categoria(){
        return view('admin.categoria.create_categoria');
    }
    // public function store_categoria(Request $request){
    //     Categoria::create([
    //         'id_categoria' => $request->id_categoria,
    //         'nombre_categoria' => $request->nombre_categoria,
    //     ]);
    //     return redirect()->route('categoria.index');
    // }
    // public function edit_categoria(Categoria $categoria){
        
    //     return view('admin.categoria.edit_categoria',compact('categoria'));
    // }

    
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


//esto es una prueba


// public function store_categoria(Request $request)
// {
//     $request->validate([
//         'nombre_categoria' => 'required|string|max:255',
//         'imagen_categoria' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta las reglas de validación según tus necesidades
//     ]);

//     // Subir la imagen a AWS S3 y obtener su URL
//     if ($request->hasFile('imagen_categoria')) {
//         $imagenPath = $request->file('imagen_categoria')->store('categorias', 's3'); // 'categorias' es la carpeta en S3 donde se almacenará la imagen
//         $imagenUrl = Storage::disk('s3')->url($imagenPath);
//     } else {
//         $imagenUrl = null; // No se cargó ninguna imagen
//     }

//     // Crear la categoría en la base de datos
//     Categoria::create([
//         'nombre' => $request->input('nombre_categoria'),
//         'imagen_url' => $imagenUrl,
//     ]);

//     return redirect()->route('categoria.index')->with('success', 'Categoría creada con éxito.');
// }
// 
}