<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

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
                "name" => $product->nombre_producto,
                "quantity" => 1,
                "price" => $product->precio,
                "description" => $product->descripcion
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product has been added to cart!');
    }
    
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Product added to cart.');
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
}
