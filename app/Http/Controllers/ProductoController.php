<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductoController extends Controller
{
    public function index_producto(){
        $producto = DB::table('producto')->get($producto = ['*']);
        return view('admin.producto.index_producto_admin', ['producto' => $producto]);
    }
    public function create_producto(){
        $nombre_producto = "Producto";
        DB::table('producto')->insert(['nombre_producto' => $nombre_producto]);
        return redirect()->route('admin.producto.index_producto_admin'); 
    }
    public function update_producto($nombre_producto){
        DB::table('producto')->where('nombre_producto', $nombre_producto)->update(['nombre_producto' => 'Nuevo Nombre']);
        return redirect()->route('admin.producto.index_producto_admin');
    }
    public function delete_producto($id_producto){
        DB::table('producto')->where('id_producto', $id_producto)->delete();
        return redirect()->route('admin.producto.index_producto_admin');
    }

}

      
