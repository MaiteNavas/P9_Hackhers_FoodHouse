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
        $categoria = DB::table('categoria')->get($categoria = ['*']);
        return view('admin.categoria.index_categoria_admin', ['categoria' => $categoria]);
    }
    public function create_categoria(){
        $nombre_categoria = DB::table('categoria')->insert();
        return view('admin.categoria.index_categoria_admin', ['nombre_categoria' => $nombre_categoria]);
    }
    public function update_categoria($nombre_categoria){
        //$categoria = Categoria::find($id_categoria);
        $nombre_categoria = DB::table('categoria')->where('id_categoria')->update(['nombre_categoria' => 1]);;
        return view('admin.categoria.index_categoria_admin');
    }
    public function delete_categoria($id_categoria){
        $categoria = DB::table('categoria')->where(['id_categoria' =>$id_categoria])->delete();;
        return view('admin.categoria.index_categoria_admin');
    }

}

