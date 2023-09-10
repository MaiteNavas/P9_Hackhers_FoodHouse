@extends('layouts.admin')
@section('content')
    <a class="btn custom-btn" href="/admin">Volver</a>
    <a class="btn custom-btn" href="{{ route('producto.create')}}">Crear Producto</a>
</div>    
    <h1>LISTA DE PRODUCTOS</h1>
    <div class="row" id= "product-container">
    @forelse($productos as $producto)
    <div class="card" style="width: 18rem;">
        <i class="align-self-start">{{ $producto->categoria->nombre_categoria }}</i>
        <img src="{{ $producto->ruta_foto_producto }}" class="card-img-top" alt="Foto del Producto">
        <div class="card-body">
            <h4 class="card-title">{{ $producto->nombre_producto }}</h4>
            <h6 class="card-title">{{ $producto->categoria->nombre_categoria }}</h6>
            <p class="card-text"><strong>Precio: </strong> {{ $producto->precio }} €</p>
            <p class="card-text">{{ $producto->descripcion }}</p>
            <form action="{{ route('producto.delete', $producto->id_producto) }}" method="POST">
                @csrf
                    @method("DELETE")
                        <button type="submit" class="btn btn-primary">Eliminar</button>
            </form> 
        </div>
    </div>

        @empty
        <p>No hay productos registrados</p>
   @endforelse
</div>
@endsection('content')
</body>
</html>