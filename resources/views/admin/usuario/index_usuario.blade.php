@extends('layouts.admin')


@section('content')

    <h1>LISTA DE USUARIOS</h1>

    <div class="containercrearusuario">
        <a class="btn custom-btn crearusuarioprimero" href="{{ route('usuario.create')}}">Crear usuario</a>
    </div>

    @forelse($usuarios as $usuario)
    <div class="centerusuario">
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
   
   <div class="center-container">
       <a class="btn custom-btn" href="{{ url('/admin') }}">Volver</a>
    </div>


@endsection('content')