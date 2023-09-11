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
    public function create_usuario(){
        return view('admin.usuario.create_usuario');
    }
    public function store_usuario(Request $request){
        Usuario::create([
            'id_usuario' => $request->id_usuario,
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'correo' => $request->correo,
            'contraseña' =>$request->contraseña,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
        ]);
        return redirect()->route('usuario.index');
    }
    public function edit_usuario(Usuario $usuario){
        
        return view('admin.usuario.edit_usuario',compact('usuario'));
    }
    public function update_usuario(Request $request,Usuario $usuario){
        $usuario->update([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos, 
        ]);

        return redirect()->route('usuario.index');
    }
    public function delete_usuario(Usuario $usuario){
        $usuario->delete();
        return redirect()->route('usuario.index');
    }

}
