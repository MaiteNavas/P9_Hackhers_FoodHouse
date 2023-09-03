<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuario',[UsuarioController::class, 'index'])->name('usuario.index');

