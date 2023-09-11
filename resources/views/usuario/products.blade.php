@extends('usuario.shop')
@section('content')
<div class="input-group mb-3">
    <input type="text" id="searchInput" class="form-control" placeholder="Buscar por plato, ingrediente...">
    <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="searchButton">Buscar</button>
        <button class="btn btn-outline-secondary" type="button" id="clearSearchButton">Limpiar búsqueda</button>
    </div>
</div>
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
    <div class="card" style="width: 18rem;">
        <i class="align-self-start">{{ $product->categoria->nombre_categoria }}</i>
        <img src="{{ $product->ruta_foto_producto }}" class="card-img-top" alt="Foto del Producto">
        <div class="card-body">
            <h4 class="card-title">{{ $product->nombre_producto }}</h4>
            <h6 class="card-title">{{ $product->categoria->nombre_categoria }}</h6>
            <p class="card-text"><strong>Precio: </strong> {{ $product->precio }} €</p>
            <p class="card-text">{{ $product->descripcion }}</p>
            <p class="btn-holder"><a href="{{ route('addProduct.to.cart', $product->id_producto) }}" class="btn btn-outline-success">Añadir al pedido</a> </p>
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
      // Función para realizar la búsqueda
      function performSearch() {
        var searchTerm = $('#searchInput').val().toLowerCase();
        // Oculta todos los productos
        $('.product').hide();
        if (searchTerm === '') {
            // Si la barra de búsqueda está vacía, muestra todos los productos
            $('.product').show();
        } else {
            // Muestra solo los productos que contienen el término de búsqueda en su nombre o descripción
            $('.product').each(function () {
                var productName = $(this).find('.card-title').text().toLowerCase();
                var productDescription = $(this).find('p').text().toLowerCase(); // Obtener la descripción
                if (productName.includes(searchTerm) || productDescription.includes(searchTerm)) {
                    $(this).show();
                }
            });
        }
    }
    // Agrega el evento para buscar al hacer clic en el botón
    $('#searchButton').on('click', performSearch);
    // Agrega el evento para buscar al presionar Enter en el campo de búsqueda
    $('#searchInput').on('keypress', function (e) {
        if (e.key === 'Enter') {
            performSearch();
        }
    });
    // Agrega el evento para limpiar la búsqueda
    $('#clearSearchButton').on('click', function () {
        // Limpiar el campo de búsqueda
        $('#searchInput').val('');
        // Mostrar todos los productos nuevamente
        $('.product').show();
    });
});
</script>
@endsection
</body>