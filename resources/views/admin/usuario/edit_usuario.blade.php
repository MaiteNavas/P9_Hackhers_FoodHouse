@extends('layouts.admin')

@section('content')


<div class="container-with-border bg-light" >
        <h1>Editar usuario</h1>
        <form action="{{ route('usuario.update', $usuario->id_usuario)}}" method="POST" autocomplete="off">     
        @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de usuario</label>
                <input type="text" name="nombre" value="{{ $usuario->nombre }}" required class="form-control" id="nombre" aria-describedby="nombre">
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" name="apellidos" value="{{ $usuario->apellidos }}" required class="form-control" id="apellidos" aria-describedby="apellidos">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" name="correo" value="{{ $usuario->correo }}" required class="form-control" id="correo" aria-describedby="correo">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" name="direccion" value="{{ $usuario->direccion }}" required class="form-control" id="direccion" aria-describedby="direccion">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" value="{{ $usuario->telefono }}" required class="form-control" id="telefono" aria-describedby="telefono">
            </div>
                <button type="submit" class="btn custom-btn">Actualizar</button>

        </form>
    </div>

    <a class="btn custom-btn" href="{{ route('usuario.index')}}">Volver</a>

@endsection