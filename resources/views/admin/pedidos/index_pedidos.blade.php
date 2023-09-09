@extends('layouts.app2')

@section('content')
<a class="btn custom-btn" href="/admin">Volver</a>
<div class="row">
    @foreach($pedidos as $pedido)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ID: {{ $pedido->id_pedido }}</h5> 
                    <h3 class="card-text"><strong>Total: </strong> €{{ $pedido->precio_pedido }}</h3>
                    <h5 class="card-text"><strong>Estado: </strong> {{ $pedido->estado_pedido->nombre_estado_pedido }}</h5>
                    <a class="btn custom-btn" href="{{ route('pedidos.edit',$pedido->id_pedido)}}">Editar</a>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection