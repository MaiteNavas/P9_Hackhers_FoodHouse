<?php

use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Models\Producto;


Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin/index_admin');
}); 

Route::controller(UsuarioController::class)->group(function(){
    Route::get('/admin/usuario', 'index_usuario')->name('usuario.index');
    Route::get('/admin/usuario/create', 'create_usuario')->name('usuario.create');
    Route::post('/admin/usuario/store', 'store_usuario')->name('usuario.store');
    Route::get('/admin/usuario/edit/{usuario}', 'edit_usuario')->name('usuario.edit');
    Route::post('/admin/usuario/update/{usuario}', 'update_usuario')->name('usuario.update');
    Route::delete('/admin/usuario/delete/{usuario}', 'delete_usuario')->name('usuario.delete');
});


Route::controller(CategoriaController::class)->group(function(){
    Route::get('/admin/categoria', 'index_categoria')->name('categoria.index');
   // Route::get('/admin/producto/create', 'index_categoria')->name('categoria.index');
    Route::get('/admin/categoria/create', 'create_categoria')->name('categoria.create');
    Route::post('/admin/categoria/store', 'store_categoria')->name('categoria.store');
    Route::get('/admin/categoria/edit/{categoria}', 'edit_categoria')->name('categoria.edit');
    Route::post('/admin/categoria/update/{categoria}', 'update_categoria')->name('categoria.update');
    Route::delete('/admin/categoria/delete/{categoria}', 'delete_categoria')->name('categoria.delete');
});

Route::controller(ProductoController::class)->group(function(){
    Route::get('/admin/producto', 'index_producto')->name('producto.index');
    Route::get('/admin/producto/create', 'create_producto')->name('producto.create');
    Route::post('/admin/producto/store', 'store_producto')->name('producto.store');
    Route::get('/admin/producto/edit/{producto}', 'edit_producto')->name('producto.edit');
    Route::post('/admin/producto/update/{producto}', 'update_producto')->name('producto.update');
    Route::delete('/admin/producto/delete/{producto}', 'delete_producto')->name('producto.delete');
    Route::get('/usuario', 'show_producto')->name('usuario.producto.index');

});
//Route::controller(PedidoController::class)->group(function(){
    //Route::get('/usuario/pedido', 'index_pedido')->name('pedido.index');
    
//});
Route::get('/dashboard', [PedidoController::class, 'index']);  
Route::get('/shopping-cart', [PedidoController::class, 'productCart'])->name('shopping.cart');
Route::get('/product/{id}', [PedidoController::class, 'addProducttoCart'])->name('addProduct.to.cart');
Route::patch('/update-shopping-cart', [PedidoController::class, 'updateCart'])->name('update.shopping.cart');
Route::delete('/delete-cart-product', [PedidoController::class, 'deleteProduct'])->name('delete.cart.product');

//Rutas cart
//Route::get('/carrito', 'CarritoController@index')->name('carrito.index');
//Route::post('/carrito/agregar', 'CarritoController@agregar')->name('carrito.agregar');
//Route::post('/carrito/eliminar', 'CarritoController@eliminar')->name('carrito.eliminar');
//Route::get('/carrito/comprar', 'CarritoController@comprar')->name('carrito.comprar');
