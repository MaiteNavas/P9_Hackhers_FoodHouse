<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\AwsS3V3\PortableVisibilityConverter;
use App\Http\Controllers\FotoController;
use Aws\S3\S3Client;

class CategoriaController extends Controller
{
    public function index_categoria(){
        $categorias = Categoria::all($columns = ['*']);
 
        return view('admin.categoria.index_categoria',compact('categorias'));
    }
    public function create_categoria()
    {
        $rutasFotosEnS3 = [
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Bebidas.jpg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Carnes.jpeg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Desayunos.jpeg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Ensaladas.jpg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Entrantes.jpg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Pastas.jpeg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Pescados.webp',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Postres.webp',

        ];

        return view('admin.categoria.create_categoria', compact('rutasFotosEnS3'));
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

    public function store_categoria(Request $request)
    {
        $request->validate([
            'nombre_categoria' => 'required|string|max:255',
            'imagen_categoria' => 'required|url', 
        ]);

        $s3 = new S3Client([
            'version' => 'latest',
            'region'  => env('AWS_DEFAULT_REGION'), 
            'credentials' => [
                'key'    => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
        ]);

        $bucket = 'hackhers';
        $rutaFotoEnS3 = $request->input('imagen_categoria');

        $urlFoto = $s3->getObjectUrl($bucket, $rutaFotoEnS3);

     
        $categoria = Categoria::create([
            'nombre_categoria' => $request->input('nombre_categoria'),
            'ruta_foto' => $urlFoto,
        ]);

        return redirect()->route('categoria.index')->with('success', 'Categoría creada con éxito.');
    }
    public function edit_categoria($id)
{
    $categoria = Categoria::findOrFail($id);

    $rutasFotosEnS3 = [
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Bebidas.jpg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Carnes.jpeg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Desayunos.jpeg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Ensaladas.jpg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Entrantes.jpg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Pastas.jpeg',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Pescados.webp',
            'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Postres.webp',

    ];

    return view('admin.categoria.edit_categoria', compact('categoria', 'rutasFotosEnS3'));
}

}