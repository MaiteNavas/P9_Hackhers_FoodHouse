@extends('layouts.admin')

@section('content')

<div class="container-with-border bg-light" >
        <h1>Crear Producto</h1>
        <form action="{{ route('producto.store')}}" method="POST" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input type="text" name="nombre_producto" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Categoria</label>
                <input type="text" name="id_categoria" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select name="id_estado_producto" required class="form-control" id="estado">
                <option value="disponible">Disponible</option>
                <option value="no_disponible">No Disponible</option>
                </select>
            </div>
                            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripción</label>
                <input type="text" name="descripcion" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" name="precio" required class="form-control" id="precio" step="0.01" min="0.00">
            </div>    

            <button type="submit" class="btn custom-btn">Guardar</button>

        </form>
    </div>

    <div class="center-container">
       <a class="btn custom-btn" href="{{ route('producto.index')}}">Volver</a>
    </div>

@endsection

