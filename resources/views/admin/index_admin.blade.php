@extends('layouts.app2')

@section('content')


    <div class="center">
        <div class="botones">
            <a class="btn custom-btn" href="">Usuarios</a>
            <a class="btn custom-btn" href="{{ route('categoria.index')}}">Categorias</a>
            <a class="btn custom-btn" href="{{ route('producto.index')}}">Productos</a>
            <a class="btn custom-btn" href="">Ventas</a>
        </div>
    </div>
    @endsection('content')
    </body>
</html>