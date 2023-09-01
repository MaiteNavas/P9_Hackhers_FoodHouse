<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::controller(BlogController::class)->group(function(){
    Route::get('/admin/categoria/index', 'index_categoria_admin')->name('categoria');
    Route::get('/admin/categoria/create', 'create_categoria_admin')->name('categoria');
    Route::get('/admin/categoria/edit', 'edit_categoria_admin')->name('categoria');
});

