@extends('pedido.shop')
  
@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @php $totalPedido = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            @php $totalPedido += $details['price'] * $details['quantity'] @endphp
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <div class="input-group">
                            <p type="number" class="form-control quantity" value="{{ $details['quantity'] }}" min="1">{{ $details['quantity'] }}</p>
                            <div class="input-group-append">
                                 <a href="{{ route('removeProduct.to.cart', $id) }}" class="btn btn-outline-secondary update-quantity">-</a>
                            <a href="{{ route('addProduct.to.cart', $id) }}" class="btn btn-outline-secondary update-quantity">+</a>
                            
                            </div>
                        </div>
                    </td>
                    @php $total = 0 @endphp
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <td data-th="PriceTotal">${{ $total }}</td>
                    
                    <td class="actions">
                        <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
       <tr>
        <td colspan="5" class="text-right">Total ${{ $totalPedido }}
        </td>
        </tr>
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