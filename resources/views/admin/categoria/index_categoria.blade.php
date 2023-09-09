@extends('layouts.app2')

@section('content')

    <a class="btn custom-btn" href="/admin">Volver</a>
    <a class="btn custom-btn" href="{{ route('categoria.create')}}">Crear categoria</a>
    <h1>LISTA DE CATEGORIAS</h1>
    @forelse($categorias as $categoria)
    <div class="center">
        <h3>{{ $categoria->id_categoria }}
            {{ $categoria->nombre_categoria }}
        </h3>
            <a class="btn custom-btn" href="{{ route('categoria.edit',$categoria->id_categoria)}}">Editar</a>
            <form action="{{ route('categoria.delete', $categoria->id_categoria) }}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn custom-btn">Eliminar</button>
            </form>
    </div>
    @empty
        <p>No hay categoria registradas</p>
   @endforelse
@endsection('content')

</body>
</html>