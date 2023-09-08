@extends('pedido.shop')
   
@section('content')
 
<div class="row">
    @foreach($products as $product)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $product->nombre_producto }}</h4>
                    <p>{{ $product->descripcion }}</p>
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