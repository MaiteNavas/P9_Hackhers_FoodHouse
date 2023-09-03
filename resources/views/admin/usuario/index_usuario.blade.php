@extends('layouts.app2')


@section('content')

<a class="btn custom-btn" href="{{ route('usuario.index')}}">Volver</a>
    <a class="btn custom-btn" href="{{ route('usuario.create')}}">Crear usuario</a>
    <h1>LISTA DE USUARIOS</h1>
    @forelse($usuarios as $usuario)
    <div class="center">
        <h3>{{ $usuario->id_usuario }}
            {{ $usuario->nombre }}
            {{ $usuario->apellidos }}
        </h3>
            <a class="btn custom-btn" href="{{ route('usuario.edit',$usuario->id_usuario)}}">Editar</a>
            <form action="{{ route('usuario.delete', $usuario->id_usuario) }}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn custom-btn">Eliminar</button>
            </form>
    </div>
    @empty
        <p>No hay categoria registradas</p>
   @endforelse


@endsection('content')