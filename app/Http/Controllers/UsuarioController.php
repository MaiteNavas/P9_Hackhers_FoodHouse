<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UsuarioController extends Controller
{
    public function index_usuario(){
        $usuarios= Usuario::all($columns = ['*']);

        return view('admin.usuario.index_usuario',compact('usuarios'));
    }

}
