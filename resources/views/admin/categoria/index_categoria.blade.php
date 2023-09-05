@extends('layouts.admin')

@section('content')

<div class="containercrearusuario">    
<a class="btn custom-btn crearusuarioprimero" href="{{ route('categoria.create')}}">Crear categoria</a>
</div>
    
<h1>LISTA DE CATEGORIAS</h1>
    @forelse($categorias as $categoria)
    <div class="centerusuario">
        <h3>{{ $categoria->id_categoria }}
            {{ $categoria->nombre_categoria }}
        </h3>
        <button type="submit" class="btn custom-btn crearusuario">
            <a href="{{ route('categoria.edit',$categoria->id_categoria)}}">Editar</a>
        </button>
            <form action="{{ route('categoria.delete', $categoria->id_categoria) }}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn custom-btn">Eliminar</button>
            </form>
    </div>
    @empty
        <p>No hay categoria registradas</p>
   @endforelse

   <div class="center-container">
       <a class="btn custom-btn" href="{{ url('/admin') }}">Volver</a>
    </div>

@endsection('content')

</body>
</html>