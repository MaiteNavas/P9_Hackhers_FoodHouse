@extends('pedido.shop')
   
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

<div class="row" id= "table">
    @foreach($products as $product)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $product->nombre_producto }}</h4>
                    <p>{{ $product->descripcion }}</p>
                    <input id= "categorias" value= "{{ $product->categoria->id_categoria }}" hidden></input>
                    <p>{{ $product->categoria->nombre_categoria }}</p>
                    <p class="card-text"><strong>Price: </strong> ${{ $product->precio }}</p>
                    <div class="input-group">
                            
                            <div class="input-group-append">
                                 <a href="{{ route('removeProduct.to.cart', $product->id_producto) }}" class="btn btn-outline-secondary update-quantity">-</a>
                            <a href="{{ route('addProduct.to.cart', $product->id_producto) }}" class="btn btn-outline-secondary update-quantity">+</a>
                            
                            </div>
                        </div>
                    <p class="btn-holder"><a href="{{ route('addProduct.to.cart', $product->id_producto) }}" class="btn btn-outline-danger">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection

@section('scripts')

<script type="text/javascript">

            document.addEventListener("DOMContentLoaded", function() {
            var table = document.getElementById("table");
            var rows = Array.from(table.getElementById("categorias")).slice(1);
            var rolFilter = document.getElementById("rolFilter");

            rolFilter.addEventListener("change", function() {
                filterTableByRol();
            });

            function filterTableByRol() {
                var selectedValue = rolFilter.value;
                for (var i = 0; i < rows.length; i++) {
                    var rowRol = rows[i].getElementById("categorias")[0].innerText;
                    if (selectedValue === "all" || rowRol === selectedValue) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }

            filterTableByRol();
        });

</script>

@endsection

</body>