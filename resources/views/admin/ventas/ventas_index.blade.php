@extends('layouts.app2')

@section('content')
<a class="btn custom-btn" href="/admin">Volver</a>
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>ID PEDIDO</th>
            <th>PRECIO</th>
            <th>FECHA</th>
        </tr>
    </thead>
    <tbody> 
    @php $totalPedido = 0 @endphp
        @foreach($pedidos as $pedido) 
            @php $totalPedido += $pedido->precio_pedido @endphp
        <tr rowId="{{ $pedido->id_pedido }}">
            <td data-th="Price">{{ $pedido->id_pedido }} €</td>
            <td data-th="Price">{{ $pedido->precio_pedido }} €</td>          
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h5><strong>Total</strong> {{ $totalPedido }} € </h5></td>
        </tr>
    </tfoot>
</table>


@endsection('content')
