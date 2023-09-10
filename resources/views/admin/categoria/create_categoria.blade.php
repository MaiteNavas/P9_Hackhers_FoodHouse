@extends('layouts.admin')

@section('content')
    <a class="btn custom-btn" href="{{ route('categoria.index')}}">Volver</a>

    <div class="container-with-border bg-light">
        <h1>Crear Categoria</h1>
        <form action="{{ route('categoria.store')}}" method="POST" autocomplete="off">
            @csrf

            <label for="nombre_categoria">Nombre de la Categoría:</label>
            <input type="text" name="nombre_categoria" id="nombre_categoria" required>

            <label for="imagen_categoria">Selecciona una imagen:</label>
            <select name="imagen_categoria" id="imagen_categoria">
                @foreach($rutasFotosEnS3 as $rutaFotoEnS3)
                    <option value="{{ $rutaFotoEnS3 }}">{{ $rutaFotoEnS3 }}</option>
                @endforeach
            </select>
            <!-- <div class="selected-image">
                <label>Imagen seleccionada:</label>
                <img id="selected-image" src="" alt="Imagen seleccionada">
            </div> -->

            <button type="submit">Guardar Categoría</button>
        </form>
    </div>

    <div class="center-container">
       <a class="btn custom-btn" href="{{ url('/admin') }}">Volver</a>
    </div>
@endsection



