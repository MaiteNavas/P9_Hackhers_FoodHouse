@extends('layouts.app2')
@section('content')
    <a class="btn custom-btn" href="/admin">Volver</a>
    <a class="btn custom-btn" href="{{ route('producto.create')}}">Crear Producto</a>
    <h1>LISTA DE PRODUCTOS</h1>
    <div class="row" id= "product-container">
    @forelse($productos as $producto)
    <div class="col-md-3 col-6 mb-4 product d-flex">
    <div class="card w-100 d-flex flex-fill">
    <i class="align-self-start">{{ $producto->categoria->nombre_categoria }}</i>
        <div class="embed-responsive embed-responsive-1by1">
            <img class="embed-responsive-item img-fluid producto-imagen h-100" src="{{ $producto->ruta_foto_producto }}" alt="Foto del Producto">
        </div>
        <div class="card-body">
            <h4 class="card-title">{{ $producto->nombre_producto }}</h4>
            <p>{{ $producto->descripcion }}</p>
            <p class="card-text"><strong>Precio: </strong> {{ $producto->precio }} €</p>
            <form action="{{ route('producto.delete', $producto->id_producto) }}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn custom-btn">Eliminar</button>
            </form>
        </div>
    </div>
</div>


        @empty
        <p>No hay productos registrados</p>
   @endforelse
</div>
@endsection('content')
</body>
</html>