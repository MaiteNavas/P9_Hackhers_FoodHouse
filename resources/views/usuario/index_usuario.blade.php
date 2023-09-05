<!-- @extends('layouts.app')

@section('content')

<a class="btn custom-btn" href="{{ route('producto.index')}}">Volver</a>

<h1>LISTA DE PRODUCTOS</h1>
<a class="btn custom-btn" href="/usuario/carrito">Ir al carrito</a>

@forelse($productos as $producto)
<div class="center">
    <h3>
        {{ $producto->id_producto }}
        {{ $producto->nombre_producto }}
        {{ $producto->descripcion }}
        {{ $producto->precio }}
    </h3>

    <form action="{{ route('carrito.agregar') }}" method="POST">
        @csrf
        <input type="hidden" name="id_producto" value="{{ $producto->id_producto }}">
        <button type="submit" class="btn btn-primary">Agregar al carrito</button>
    </form>
</div>
@empty
<p>No hay productos registrados</p>
@endforelse
@endsection('content')

</body>
</html>

<h1>Hola desde el despliegue de producto</h1> -->