@extends('usuario.shop')
   
@section('content')


<div class="filter-container">
    <label for="inputPassword" class="col-sm-2 col-form-label">Filtrar por categoría:</label>
    <select id="rolFilter" class="form-select">
        <option value="all">Todas</option>
        @foreach ($categorias as $categoria)
                <option value="{{$categoria->id_categoria}}">{{$categoria->nombre_categoria}}</option>
            @endforeach
    </select>
</div>
<br>

<div class="row" id= "product-container">
    @foreach($products as $product)
        <div class="col-md-3 col-6 mb-4 product" data-categoria="{{ $product->categoria->id_categoria }}">
            <div class="card">
                <div class="card-body">
                    <i>{{ $product->categoria->nombre_categoria }}</i>
                    <img class="producto-imagen" src="{{ $product->ruta_foto_producto }}" alt="Foto del Producto">
                    <h4 class="card-title">{{ $product->nombre_producto }}</h4>
                    <p>{{ $product->descripcion }}</p>
                    <input id= "categorias" value= "{{ $product->categoria->id_categoria }}" hidden></input>
                    <p class="card-text"><strong>Precio: </strong> {{ $product->precio }} €</p>
                    
                    <p class="btn-holder"><a href="{{ route('addProduct.to.cart', $product->id_producto) }}" class="btn btn-outline-success">Añadir al pedido</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection

@section('scripts')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $('#rolFilter').on('change', function () {
        var selectedCategoria = $(this).val();

        // Oculta todos los productos
        $('.product').hide();

        if (selectedCategoria === 'all') {
            // Si se selecciona "Todas", muestra todos los productos
            $('.product').show();
        } else {
            // Muestra solo los productos que pertenecen a la categoría seleccionada
            $('.product[data-categoria="' + selectedCategoria + '"]').show();
        }
    });
});
</script>


@endsection

</body>