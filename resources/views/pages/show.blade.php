@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('pages.index') }}"> Back</a>
    </div>
    <div class="row align-items-center">
        <div class="col-md-6 bg-light align-self-center image-position">
            <img style="width:100%" src="/storage/images/{{$product->image}}">
        </div>
        <div class="col-md-6 bg-light px-5 forms">
            <div class="form-group lead">
                Brand: {{ $product->brand }}
            </div>
            <div class="form-group lead">
                Category: {{ $product->category }}
            </div>
            <div class="form-group lead">
                Name: {{ $product->name }}
            </div>
            <div class="form-group lead">
                Price: $ {{ $product->price }}
            </div>
            <div class="form-group lead">
                Description: {{ $product->description }}
            </div>
                <a class="btn btn-primary" href="#">Add to Cart</a>
        </div>
        
    </div>
</div>
@endsection
