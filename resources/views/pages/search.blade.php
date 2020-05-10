@extends('layouts.app')
@section('content')
<div class="container">
  <form action="" method="GET">
    <div class="row">
      <div class="col-10">
        <input type="text" name="search-line" class="form-control" placeholder="Search ...">
      </div>
      <div class="col-2">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </div>
  </form>
  <div class="row">
    @if (count($items) >= 1)
    @foreach ($items as $item)
    <div class="card-wrapper col-md-4 d-flex justify-content-center align-items-center mt-3">
      <div class="card product-card d-flex align-items-center" style="width: 24rem;">
        <a href="{{ route('shop.show',$item->id) }}"><img class="card-img-top" src="/storage/images/{{$item->image}}" alt="Card image cap"></a>
        <div class="card-body">
          <h5 class="card-title">{{ $item->category }} Chocolate</h5>
          <p class="card-text">Price: ${{ $item->price }}</p>
          {{-- <a href="{{ route('pages.show',$product->slug) }}" class="btn btn-primary">More...</a> --}}
        </div>
      </div>
    </div>
    @endforeach
    @else
    <h3 class="mt-3">Nothing found</h3>
    @endif
  </div>
</div>
@endsection
