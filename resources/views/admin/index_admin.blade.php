@extends('layouts.app2')

@section('content')


    <div class="center">
        <div class="botones">
            <a class="btn custom-btn" href="/admin/usuario">Usuarios</a>
            <a class="btn custom-btn" href="{{ route('categoria.index')}}">Categorias</a>
            <a class="btn custom-btn" href="{{ route('producto.index')}}">Productos</a>
            <a class="btn custom-btn" href="/admin/pedidos">Pedidos</a>
            <a class="btn custom-btn" href="/admin/ventas">Ventas</a>
        </div>
    </div>
    @endsection('content')
    </body>
</html>