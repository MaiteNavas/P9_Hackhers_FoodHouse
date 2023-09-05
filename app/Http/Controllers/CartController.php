<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Models\Product;
use App\Models\Producto;

class CartController extends Controller
{
    public function shop()
    {
    $products = Producto::all();
    //dd($products);
    return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' =>
    $products]);
    }

    public function cart() {
    $cartCollection = \Cart::getContent();
    //dd($cartCollection);
    return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' =>
    $cartCollection]);;
    }

    public function remove(Request $request){
    \Cart::remove($request->id);
    return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function add(Request$request){
    \Cart::add(array(
    'id_producto' => $request->id_producto,
    'nombre_producto' => $request->nombre_producto,
    'precio' => $request->precio,
    'quantity' => $request->quantity,
    'attributes' => array(
    'image' => $request->img,
    'slug' => $request->slug
    )
    ));
    return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){
    \Cart::update($request->id,
    array(
    'quantity' => array(
    'relative' => false,
    'value' => $request->quantity
    ),
    ));
    return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
    \Cart::clear();
    return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }
}
