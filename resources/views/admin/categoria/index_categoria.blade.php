    @extends('layouts.admin')

    @section('content')
        <a class="btn custom-btn small" href="/admin">Volver</a>
        <a class="btn custom-btn small" href="{{ route('categoria.create')}}">Crear categoria</a>
        <h1>LISTA DE CATEGORIAS</h1>
        @forelse($categorias as $categoria)
            <div class="center categoria">
                <h3>
                    {{ $categoria->id_categoria }} {{ $categoria->nombre_categoria }}
                </h3>
                <img class="categoria-imagen" src="{{ $categoria->ruta_foto }}" alt="Foto de la Categoría">
                <a class="btn custom-btn small" href="{{ route('categoria.edit',$categoria->id_categoria)}}">Editar</a>
                <form action="{{ route('categoria.delete', $categoria->id_categoria) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn custom-btn small">Eliminar</button>
                </form>
                
            </div>
        @empty
            <p>No hay categoria registradas</p>
        @endforelse
    @endsection
