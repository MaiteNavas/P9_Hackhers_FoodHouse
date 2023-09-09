@extends('layouts.app2')

@section('content')
<a class="btn custom-btn" href="{{ route('producto.index')}}">Volver</a>

<div class="container-with-border bg-light" >
        <h1>Crear Producto</h1>
        <form action="{{ route('producto.store')}}" method="POST" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input type="text" name="nombre_producto" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
                <label for="imagen_producto">Selecciona una imagen:</label>
                <select name="imagen_producto" id="imagen_producto">
                    @foreach($rutasFotosEnS3 as $rutaFotoEnS3)
                        <option value="{{ $rutaFotoEnS3 }}">{{ $rutaFotoEnS3 }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categoria</label>
            <select name="id_categoria" required class="form-control" id="categoria">
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id_categoria}}">{{$categoria->nombre_categoria}}</option>
            @endforeach
            </select>
            </div>
            <!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estado del Producto</label>
            <select name="id_estado_producto" required class="form-control" id="estado_producto">
            @foreach ($estadoProductos as $estadoProducto)
                <option value="{{$estadoProducto->id_estado_producto}}">{{$estadoProducto->nombre_estado_producto}}</option>
            @endforeach
            </select>
            </div>               -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripción</label>
                <input type="text" name="descripcion" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" name="precio" required class="form-control" id="precio" step="0.01" min="0.00">
            </div>
            <button type="submit" class="btn custom-btn">Guardar</button>

        </form>
</div>
@endsection
</body>
</html>
