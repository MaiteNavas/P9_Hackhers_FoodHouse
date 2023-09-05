@extends('layouts.admin')

@section('content')

<div class="container-with-border bg-light" >
        <h1>Crear Categoria</h1>
        <form action="{{ route('categoria.store')}}" method="POST" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la categoria</label>
                <input type="text" name="nombre_categoria" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" class="btn custom-btn crearusuario">Guardar</button>

        </form>
    </div>

    <div class="center-container">
       <a class="btn custom-btn" href="{{ url('/admin') }}">Volver</a>
    </div>
@endsection