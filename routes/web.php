<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('admin/index_admin');
});
Route::controller(CategoriaController::class)->group(function(){
    Route::get('/admin/categoria', 'index_categoria')->name('categoria_index');
    Route::get('/admin/categoria/create', 'create_categoria')->name('categoria_create');
    Route::get('/admin/categoria/edit/{slug}', 'update_categoria')->name('categoria_edit');
    Route::get('/admin/categoria/delete/{slug}', 'delete_categoria')->name('categoria_delete');
});

