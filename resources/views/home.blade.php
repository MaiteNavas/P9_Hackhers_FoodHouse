@extends('layouts.app3')

@section('content')

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/movil.jpeg') }}"  class="d-block w-100" alt="..." style="max-width: 100%; max-height: 400px; height: auto">
      <div class="carousel-caption d-none d-md-block">
        <h5>¡De la cocina a tu casa!</h5>
        <p>Elige qué comer hoy con un solo click. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/Delivery.jpeg') }}" class="d-block w-100" alt="..." style="max-width: 100%; max-height: 400px; height: auto">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ecofriendly</h5>
        <p>Todos nuestros envases son responsables ecológicamente</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/tupper.jpeg') }}" class="d-block w-100" alt="..." style="max-width: 100%; max-height: 400px; height: auto">
      <div class="carousel-caption d-none d-md-block">
        <h5>¿Hambre de saber más?</h5>
        <p>¡Apúntate a nuestra newsletter!</p>
        <a class="btn custom-btn btn-lng">AQUIII</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="container-acceso">
    <a class="btn custom-btn btn-lg" href="/usuario">¡Pide aquí!</a></div>
</div>


@endsection