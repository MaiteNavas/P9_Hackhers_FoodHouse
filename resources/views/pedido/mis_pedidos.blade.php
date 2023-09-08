@extends('pedido.shop')
  
@section('content')
<div class="row">
    @foreach($pedidos as $pedido)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ID: {{ $pedido->id_pedido }}</h4> 
                    <p class="card-text"><strong>Total: </strong> €{{ $pedido->precio_pedido }}</p>
                    <p class="card-text"><strong>Estado: </strong> €{{ $pedido->estado_pedido->nombre_estado_pedido }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection