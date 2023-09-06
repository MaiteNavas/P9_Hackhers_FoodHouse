@extends('layouts.admin')

@section('content')

<div class="containercrearusuario">    
    <a class="btn custom-btn" href="{{ route('producto.create')}}">Crear Producto</a>
</div>    
    <h1>LISTA DE PRODUCTOS</h1>
    @forelse($productos as $producto)
    <div class="center">
        <h3>{{ $producto->id_producto }}
            {{ $producto->nombre_producto }}
            {{ $producto->descripcion }}
            {{ $producto->precio }}
        </h3>
        <button type="submit" class="btn custom-btn crearusuario">
            <a href="{{ route('producto.edit',$producto->id_producto)}}">Editar</a>
        </button>
            <form action="{{ route('producto.delete', $producto->id_producto) }}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn custom-btn">Eliminar</button>
            </form>
    </div>
    @empty
        <p>No hay productos registrados</p>
   @endforelse

   <div class="center-container">
       <a class="btn custom-btn" href="{{ url('/admin') }}">Volver</a>
    </div>

@endsection('content')

</body>
</html>