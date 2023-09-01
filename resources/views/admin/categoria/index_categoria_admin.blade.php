<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
@extends('/layouts/headerTemplate')

@section('header')

@endsection('header')

    <h1>LISTA DE CATEGORIAS</h1>
    @foreach($categoria as $cat)
        <h3>
            {{ $cat->id_categoria }}
            {{ $cat->nombre_categoria }}
            <a class="btn custom-btn" href="{{ route('categoria_edit',$cat->id_categoria)}}">Editar</a>
            <a class="btn custom-btn" href="{{ route('categoria_delete', $cat->id_categoria)}}">Eliminar</a>
        </h3>
   @endforeach

   <div class="container-with-border bg-light" >
        <h1>Crear Categoria</h1>
        <form action="{{ route('categoria_create')}}" method="" autocomplete="off">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la categoria</label>
                <input type="text" name="categoria" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <button type="submit" class="btn custom-btn">Guardar</button>

        </form>
    </div>

</body>
</html>