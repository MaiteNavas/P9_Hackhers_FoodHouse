@extends('pedido.shop')
  
@section('content')
<form action="{{ route('producto.store')}}" method="POST" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input type="text" name="nombre_producto" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categoria</label>
            <select name="id_categoria" required class="form-control" id="categoria">
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id_categoria}}">{{$categoria->nombre_categoria}}</option>
            @endforeach
            </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categoria</label>
            <select name="id_estado_producto" required class="form-control" id="estado_producto">
            @foreach ($estadoProductos as $estadoProducto)
                <option value="{{$estadoProducto->id_estado_producto}}">{{$estadoProducto->nombre_estado_producto}}</option>
            @endforeach
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
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <form action=""></form>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                   
                    <td data-th="Subtotal" class="text-center">${{ $details['quantity'] }}</td>
                    <td class="actions">
                        <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/dashboard') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-danger">Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection
  
@section('scripts')
<script type="text/javascript">
  
    $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.shopping.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("rowId"), 
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".delete-product").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection