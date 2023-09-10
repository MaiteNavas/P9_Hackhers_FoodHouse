@extends('layouts.admin')

@section('content')

<a class="btn custom-btn" href="{{ route('pedidos.index')}}">Volver</a>

<div class="container-with-border bg-light" >
        <h1>Editar estado del pedido{{ $pedido->id_pedido }}</h1>
        <form action="{{ route('pedidos.update', $pedido->id_pedido)}}" method="POST" autocomplete="off">     
        @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">ID pedido</label>
                <input type="text" name="nombre" value="{{ $pedido->id_pedido }}" readonly required class="form-control" id="nombre" aria-describedby="nombre">
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Total</label>
                <input type="text" name="apellidos" value="{{ $pedido->precio_pedido }}" readonly required class="form-control" id="apellidos" aria-describedby="apellidos">
            </div>
            <select name="id_estado_pedido" required class="form-control" id="estadoPedido">
            @foreach ($estadoPedidos as $estadoPedido)
                <option value="{{$estadoPedido->id_estado_pedido}}">{{$estadoPedido->nombre_estado_pedido}}</option>
            @endforeach
            </select>
            
                <button type="submit" class="btn custom-btn">Actualizar</button>

        </form>
    </div>
@endsection