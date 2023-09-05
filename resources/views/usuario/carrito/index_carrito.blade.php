@extends('layouts.app2')

@section('content')

    <a class="btn custom-btn" href="{{ route('producto.index')}}">Volver</a>
   
    <h1>CARRITO DE COMPRAS</h1>

    @if(count($carrito) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carrito as $carrito)
                    <tr>
                        <td>{{ $carrito['id_producto'] }}</td>
                        <td>{{ $carrito['nombre_producto'] }}</td>
                        <td>{{ $carrito['descripcion'] }}</td>
                        <td>{{ $carrito['precio'] }}</td>
                        <td>{{ $carrito['cantidad'] }}</td>
                        <td>{{ $carrito['precio'] * $carrito['cantidad'] }}</td>
                        <td>
                            <form action="{{ route('carrito.eliminar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_producto" value="{{ $item['id_producto'] }}">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-right">
            <p><strong>Total:</strong> {{ $total }}</p>
            <a href="{{ route('carrito.comprar') }}" class="btn btn-primary">Comprar</a>
        </div>
    @else
        <p>No hay productos en el carrito.</p>
    @endif

@endsection
</html>
<h1>Hola desde el carrito</h1>
