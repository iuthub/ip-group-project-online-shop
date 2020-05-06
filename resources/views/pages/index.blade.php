@extends('layouts.app')
@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1511381939415-e44015466834?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1438&q=80" class="d-block w-100" alt="Dark Chocolate Image">
      <div class="carousel-caption d-none d-md-block">
        <h5>Dark Chocolate</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/867464/pexels-photo-867464.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="Milk Chocolate Image">
      <div class="carousel-caption d-none d-md-block">
        <h5>Milk Chocolate</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="css/white_upgrade.jpg" class="d-block w-100" alt="White Chocolate Image">
      <div class="carousel-caption d-none d-md-block">
        <h5>White Chocolate</h5>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row my-4">
    @foreach ($products as $product)
    <div class="card-wrapper col-md-4 d-flex justify-content-center align-items-center px-1 py-1">
      <div class="card product-card d-flex align-items-center" style="width: 24rem;">
        <img class="card-img-top" src="/storage/images/{{$product->image}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $product->brand }}</h5>
          <p class="card-text">Price: ${{ $product->price }}</p>
          <a href="#" class="btn btn-primary">More...</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="row justify-content-center my-4">
    {!! $products->links() !!}
  </div>
</div>
@endsection
