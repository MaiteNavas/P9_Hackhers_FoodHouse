@extends('layouts.app2')

@section('content')
<a class="btn custom-btn" href="{{ route('categoria.index')}}">Volver</a>

<div class="container-with-border bg-light" >
    <h1>Crear Categoria</h1>
    <form action="{{ route('categoria.store')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf

        <label for="nombre_categoria">Nombre de la Categoría:</label>
        <input type="text" name="nombre_categoria" id="nombre_categoria" required>

        <label for="imagen_categoria">Selecciona una imagen:</label>
        <select name="imagen_categoria" id="imagen_categoria">
            @foreach($rutasFotosEnS3 as $rutaFotoEnS3)
                <option value="{{ $rutaFotoEnS3 }}">{{ $rutaFotoEnS3 }}</option>
            @endforeach
        </select>

    <button type="submit">Guardar Categoría</button>
    </form>
