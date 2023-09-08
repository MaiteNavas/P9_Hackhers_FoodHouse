<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Pedido;
use App\Models\Categoria;
use App\Models\PedidoProducto;

class PedidoController extends Controller
{
    public function index()
    {
        $products = Producto::all();
        $categorias = Categoria::all($columns = ['*']);
        return view('pedido.products', compact('products', 'categorias'));
        
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
            if ($cart[$id]['quantity'] > 0) {
                $cart[$id]['quantity']--;
            }
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
    public function resetCart()
{
    session()->forget('cart');

    return redirect()->back()->with('success', 'El carrito se ha reseteado correctamente');
}
    public function store_pedido(Request $request){
        $pedido = Pedido::create([
            'id_usuario' => $request->id_usuario,
            'id_estado_pedido' => $request->id_estado_pedido,
            'precio_pedido' => $request->precio_pedido,            
        ]);
        $productos = [];
        if (session()->has('cart') && is_array(session('cart'))) {
            foreach (session('cart') as $id => $details) {
                $productos[$id] = [
                    'cantidad' => $details['quantity'],
                    'precio_unitario' => $details['price'],
                ];
            }
        }    
        $pedido->producto()->attach($productos);
        session()->forget('cart');

        return view('pedido.confirm');
    }
    public function show_pedidos(){
        $pedidos = Pedido::all();
        return view('pedido.mis_pedidos', compact('pedidos'));
    }
}
