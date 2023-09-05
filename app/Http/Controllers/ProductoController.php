<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductoController extends Controller
{
    // public function index_producto(){
    //     $producto = DB::table('producto')->get($producto = ['*']);
    //     return view('admin.producto.index_producto_admin', ['producto' => $producto]);
    // }
    // public function create_producto(){
    //     $nombre_producto = "Producto";
    //     DB::table('producto')->insert(['nombre_producto' => $nombre_producto]);
    //     return redirect()->route('admin.producto.index_producto_admin'); 
    // }
    // public function update_producto($nombre_producto){
    //     DB::table('producto')->where('nombre_producto', $nombre_producto)->update(['nombre_producto' => 'Nuevo Nombre']);
    //     return redirect()->route('admin.producto.index_producto_admin');
    // }
    // public function delete_producto($id_producto){
    //     DB::table('producto')->where('id_producto', $id_producto)->delete();
    //     return redirect()->route('admin.producto.index_producto_admin');
    // }

    public function index_producto(){
        $productos = Producto::all($columns = ['*']);
 
        return view('admin.producto.index_producto',compact('productos'));
    }
    public function create_producto(){
        return view('admin.producto.create_producto');
    }
    public function store_producto(Request $request){
        Producto::create([
            'id_producto' => $request->id_producto,
            'nombre_producto' => $request->nombre_producto,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            
        ]);
        return redirect()->route('producto.index');
    }
    public function edit_producto(Producto $producto){
        
        return view('admin.producto.edit_producto',compact('producto'));
    }
    public function update_producto(Request $request,Producto $producto){
        $producto->update([
            'id_producto' => $request->id_producto,
            'nombre_producto' => $request->nombre_producto,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
        ]);

        return redirect()->route('producto.index');
    }
    public function delete_producto(Producto $producto){
        $producto->delete();
        return redirect()->route('producto.index');
    }

    public function show_producto(){
        $productos = Producto::all($columns = ['*']);
 
        return view('usuario.show_product',compact('productos'));
    }



}

      
