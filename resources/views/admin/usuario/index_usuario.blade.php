@extends('layouts.admin')


@section('content')
    <div class="containercrearusuarioprimero">
        <a class="btn custom-btn crearusuarioprimero" href="{{ route('usuario.create')}}">Crear usuario</a>
    </div>

    <h1>LISTA DE USUARIOS</h1>
    @forelse($usuarios as $usuario)
    <div class="center">
        <h3>{{ $usuario->id_usuario }}
            {{ $usuario->nombre }}
            {{ $usuario->apellidos }}
        </h3>
        <button type="submit" class="btn custom-btn crearusuario">
           <a href="{{ route('usuario.edit', $usuario->id_usuario) }}">Editar</a>
        </button>            
        <form action="{{ route('usuario.delete', $usuario->id_usuario) }}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn custom-btn crearusuario">Eliminar</button>
        </form>
    </div>
    
    @empty
        <p>No hay categoria registradas</p>
   @endforelse


@endsection('content')