<!DOCTYPE html>
<html>
<head>
    <title>Food for home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/71b7145720.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
  
<div class="container mt-5">
    <h2 class="mb-3">Food for home</h2>
    <div class="col-12">
  
            <a class="btn custom-btn" href="{{ route('index.usuario')}}">Inicio</a>
            <a class="btn custom-btn" href="{{ route('pedidos.usuario')}}">Mis Pedidos</a>
            <a class="btn btn-outline-dark" href="{{ route('shopping.cart') }}">
                <i class="fa-solid fa-cart-shopping"></i> Pedido 
                <span class="badge text-bg-danger">
                @php $total = 0 @endphp
                    @if(session()->has('cart') && is_array(session('cart')))
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['quantity'] @endphp   
                    @endforeach
                    @endif
                    {{ $total }}
                </span>   
            </a>
        </div>
    </div>
</div>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
    @yield('content')
</div>
  
@yield('scripts')
</body>
</html>