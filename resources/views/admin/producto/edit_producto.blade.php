@extends('layouts.admin')

@section('content')

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
            <label for="exampleInputEmail1" class="form-label">Categoria</label>
            <select name="id_categoria" required class="form-control" id="categoria">
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id_categoria}}">{{$categoria->nombre_categoria}}</option>
            @endforeach
            </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categoria</label>
            <select name="id_estado_producto" required class="form-control" id="estado_producto">
            @foreach ($estadoProductos as $estadoProducto)
                <option value="{{$estadoProducto->id_estado_producto}}">{{$estadoProducto->nombre_estado_producto}}</option>
            @endforeach
            </select>
            </div>  
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="text" name="precio" value="{{ $producto->precio }}" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <button type="submit" class="btn custom-btn">Actualizar</button>

        </form>
    </div>

    <div class="center-container">
       <a class="btn custom-btn" href="{{ route('producto.index')}}">Volver</a>
    </div>

@endsection
</body>
</html>