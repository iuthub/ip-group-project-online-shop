@extends('products.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center py-4">
        <h2 class="display-3">Details</h2>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-6 bg-light align-self-center image-position">
            <img style="width:100%" src="/storage/images/{{$product->image}}">
        </div>
        <div class="col-md-6 bg-light px-5 forms">
            <div class="form-group lead">
                <strong class="lead d-flex">Brand:</strong>
                {{ $product->brand }}
            </div>
            <div class="form-group lead">
                <strong class="lead d-flex">Category:</strong>
                {{ $product->category }}
            </div>
            <div class="form-group lead">
                <strong class="lead d-flex">Name:</strong>
                {{ $product->name }}
            </div>
            <div class="form-group lead">
                <strong class="lead d-flex">Price: $</strong>
                {{ $product->price }}
            </div>
            <div class="form-group lead">
                <strong class="lead d-flex">Description:</strong>
                {{ $product->description }}
            </div>
        </div>
    </div>
</div>
@endsection