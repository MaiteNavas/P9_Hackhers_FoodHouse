<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
=======

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;

//auth
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\Auth\ForgotPasswordController;
// use App\Http\Controllers\Auth\ConfirmPasswordController;
// use App\Http\Controllers\Auth\VerificationController;


Route::get('/', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('admin/index_admin');
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
});
Route::controller(PedidoController::class)->group(function(){    
    Route::get('/usuario','index')->name('index.usuario');
    Route::get('/usuario/mis_pedidos','show_pedidos')->name('pedidos.usuario');
    Route::get('/admin/pedidos','show_pedidos_admin')->name('pedidos.index'); 
    Route::get('/admin/pedidos/edit/{pedido}', 'edit_pedido_admin')->name('pedidos.edit');
    Route::post('/admin/pedidos/update/{pedido}', 'update_pedido_admin')->name('pedidos.update');
    Route::get('/admin/ventas','ventas_pedidos_admin')->name('ventas.index');
    Route::get('/shopping-cart','productCart')->name('shopping.cart');
    Route::get('/product/{id}','addProducttoCart')->name('addProduct.to.cart');
    Route::get('/product/remove/{id}','removeProducttoCart')->name('removeProduct.to.cart');
    Route::patch('/update-shopping-cart','updateCart')->name('update.shopping.cart');
    Route::delete('/delete-cart-product','deleteProduct')->name('delete.cart.product');
    Route::post('/store_pedido','store_pedido')->name('store.pedido');
});
   

//Rutas login
//Route::controller(HomeController::class)->group(function(){
   // Route::get('/auth/index_auth', 'index_auth')->name('auth.index');
//});

// Route::get('/auth/login/login', function () {
//     return view('auth.login.login');
// });

// Auth::routes();
// // Authentication Routes...
// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class,'login']);
// Route::post('logout',  [LoginController::class,'logout'])->name('logout');

// // Registration Routes...
// //Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// //Route::post('register', [RegisterController::class, 'register']);
// Route::get('register', 'UsuarioController@create_usuario')->name('register');



// // Password Reset Routes...
// Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');

// // Confirm Password 
// Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
// Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

// // Email Verification Routes...
// Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
// Route::get('email/resend',  [VerificationController::class, 'resend'])->name('verification.resend');

// // Home
// Route::get('/home', [app\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 642f8cc91bec36fb7e37d9772e66be30943d6ffd
