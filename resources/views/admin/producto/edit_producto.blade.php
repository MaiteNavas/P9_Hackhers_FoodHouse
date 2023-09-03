@extends('layouts.app2')

@section('content')

<a class="btn custom-btn" href="{{ route('producto.index')}}">Volver</a>

<div class="container-with-border bg-light" >
        <h1>Editar Producto</h1>
        <form action="{{ route('producto.update', $producto->id_producto)}}" method="POST" autocomplete="off">     
        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input type="text" name="nombre_producto" value="{{ $producto->nombre_producto }}" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripción</label>
                <input type="text" name="descripcion" value="{{ $producto->descripcion }}" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="text" name="precio" value="{{ $producto->precio }}" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <button type="submit" class="btn custom-btn">Actualizar</button>

        </form>
    </div>
@endsection