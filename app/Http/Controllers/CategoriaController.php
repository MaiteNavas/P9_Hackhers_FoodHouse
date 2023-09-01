<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function indexCategoria(){
        $categoria = Categoria::get();
        return view('index_categoria_admin', ['categoria' => $categoria]);
    }
}
