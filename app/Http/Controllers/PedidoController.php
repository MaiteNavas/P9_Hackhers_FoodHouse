<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Pedido;
use App\Models\PedidoProducto;

class PedidoController extends Controller
{
    public function index()
    {
        $products = Producto::all();
        return view('pedido.products', compact('products'));
    }
  
    public function productCart()
    {
        return view('pedido.cart');
    }
    public function addProducttoCart($id)
    {
        $product = Producto::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $id,
                "name" => $product->nombre_producto,
                "quantity" => 1,
                "price" => $product->precio,
                "description" => $product->descripcion,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'El producto se ha añadido al pedido!');
    }
    public function removeProducttoCart($id)
    {
        $product = Producto::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']--;
        } 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'El producto se ha eliminado del pedido!');
    }
    
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Producto añadido al pedido');
        }
    }
  
    public function deleteProduct(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully deleted.');
        }
    }
    public function store_pedido(Request $request){
        $pedido = Pedido::create([
            'id_usuario' => $request->id_usuario,
            'id_estado_pedido' => $request->id_estado_pedido,
            'precio_pedido' => $request->precio_pedido,            
        ]);
        PedidoProducto::create([
            'id_producto' => $request->id_producto,
            'id_pedido' => $pedido->id_pedido,
            'cantidad' => $request->cantidad,
            'precio_unitario' => $request->precio_unitario,              
        ]);

        return view('pedido.confirm');
    }
}
