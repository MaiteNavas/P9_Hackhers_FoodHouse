@extends('layouts.app2')

@section('content')

    <a class="btn custom-btn" href="{{ route('producto.index')}}">Volver</a>
   
    <h1>CARRITO DE COMPRAS</h1>

    @if(count($carrito) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carrito as $item)
                    <tr>
                        <td>{{ $item['nombre_producto'] }}</td>
                        <td>{{ $item['descripcion'] }}</td>
                        <td>{{ $item['precio'] }}</td>
                        <td>{{ $item['cantidad'] }}</td>
                        <td>{{ $item['precio'] * $item['cantidad'] }}</td>
                        <td>
                            <form action="{{ route('carrito.eliminar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="producto_id" value="{{ $item['id_producto'] }}">
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
