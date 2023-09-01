@extends('/layouts/headerTemplate')

@section('header')

@endsection('header')
    <div class="center">
        <div class="botones">
            <a class="btn custom-btn" href="">Usuarios</a>
            <a class="btn custom-btn" href="{{ route('categoria_index')}}">Categorias</a>
            <a class="btn custom-btn" href="">Productos</a>
            <a class="btn custom-btn" href="">Ventas</a>
        </div>
    </div>
    
    </body>
</html>