@extends('layouts.app')


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
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@section('content')
@yield('content')
@endsection

