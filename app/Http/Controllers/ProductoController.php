<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\EstadoProducto;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
    public function index_producto(){
        $productos = Producto::all($columns = ['*']);
 
        return view('admin.producto.index_producto',compact('productos'));
    }
    public function create_producto(){
        $categorias = Categoria::all($columns = ['*']);
        $estadoProductos = EstadoProducto::all($columns = ['*']);
        return view('admin.producto.create_producto',compact('categorias','estadoProductos'));
    }
    public function store_producto(Request $request){
        Producto::create([
            'nombre_producto' => $request->nombre_producto,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'id_categoria'=> $request->id_categoria,
            'id_estado_producto'=> $request->id_estado_producto,
            
        ]);
        return redirect()->route('producto.index');
    }
    public function edit_producto(Producto $producto){
        $categorias = Categoria::all($columns = ['*']);
        $estadoProductos = EstadoProducto::all($columns = ['*']);
        return view('admin.producto.edit_producto',compact('categorias','estadoProductos','producto'));
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
    

}

      
