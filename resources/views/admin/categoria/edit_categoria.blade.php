@extends('layouts.app2')

@section('content')
    <a class="btn custom-btn" href="{{ route('categoria.index')}}">Volver</a>

    <div class="container-with-border bg-light">
        <h1>Editar Categoría</h1>
        <form action="{{ route('categoria.update', $categoria->id_categoria) }}" method="POST" autocomplete="off">
            @csrf
            @method('PUT')

            <label for="nombre_categoria">Nombre de la Categoría:</label>
            <input type="text" name="nombre_categoria" id="nombre_categoria" value="{{ $categoria->nombre_categoria }}" required>

            <label for="imagen_categoria">Selecciona una imagen:</label>
            <select name="imagen_categoria" id="imagen_categoria">
                @foreach($rutasFotosEnS3 as $rutaFotoEnS3)
                    <option value="{{ $rutaFotoEnS3 }}" @if($categoria->ruta_foto == $rutaFotoEnS3) selected @endif>{{ $rutaFotoEnS3 }}</option>
                @endforeach
            </select>

            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
@endsection
