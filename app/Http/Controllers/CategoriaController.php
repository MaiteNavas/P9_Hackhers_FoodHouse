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
        $categoria = Categoria::get();
        return view('index_categoria_admin', ['categoria' => $categoria]);
    }
    public function index(): View
    {
        $categoria = DB::table('categoria')->get($categoria = ['*']);
 
        return view('index_categoria_admin', ['categoria' => $categoria]);
    }
}

