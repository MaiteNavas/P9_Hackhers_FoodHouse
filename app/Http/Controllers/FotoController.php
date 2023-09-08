<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Categoria;

class FotoController extends Controller
{
    public function obtenerUrlFoto()
    {
        $rutasFotosEnS3 = ['categorias/Carnes.jpeg', 'categorias/Desayunos.jpeg', 'categorias/Ensaladas.jpg', 'categorias/Entrantes.jpg', 'categorias/Pastas.jpeg', 'categorias/Pescados.webp', 'categorias/Postres.webp', 'categorias/Bebidas.jpg'];
        return view('admin.categoria.fotos_categoria', compact('rutasFotosEnS3'));
    }
    
}
