@extends('layouts.app2')

@section('content')
<a class="btn custom-btn" href="{{ route('categoria.index')}}">Volver</a>

<div class="container-with-border bg-light" >
        <h1>Crear Categoria</h1>
        <form action="{{ route('categoria.store')}}" method="POST" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la categoria</label>
                <input type="text" name="nombre_categoria" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <button type="submit" class="btn custom-btn">Guardar</button>

        </form>
    </div>
@endsection