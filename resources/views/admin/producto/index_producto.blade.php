@extends('layouts.app2')

@section('content')

    <a class="btn custom-btn" href="/admin">Volver</a>
    <a class="btn custom-btn" href="{{ route('producto.create')}}">Crear Producto</a>
    <h1>LISTA DE PRODUCTOS</h1>
    @forelse($productos as $producto)
    <div class="center">
        <h3>{{ $producto->id_producto }}
            {{ $producto->nombre_producto }}
            {{ $producto->descripcion }}
            {{ $producto->precio }}
            {{ $producto->id_estado_producto }}
        </h3>
            <a class="btn custom-btn" href="{{ route('producto.edit',$producto->id_producto)}}">Editar</a>
            <form action="{{ route('producto.delete', $producto->id_producto) }}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn custom-btn">Eliminar</button>
            </form>
    </div>
    @empty
        <p>No hay productos registrados</p>
   @endforelse
@endsection('content')

</body>
</html>