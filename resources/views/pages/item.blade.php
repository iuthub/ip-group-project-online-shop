@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-4">
        <h1 class="display-3">Item</h1>
    </div>
    <div class="row align-items-center rounded shadow">
        <div class="col-md-6">
            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/1776/0569/products/kit_kat_cone_multi-pack_99b2ea46-ca30-4be3-b6cf-16365eb6c1c4_grande.png?v=1513811831" alt="Card image cap">
        </div>
        <div class="col-md-6 px-5">
            <h2 class="lead d-flex justify-content-center text-primary text-uppercase">Description</h2>
            <p style="text-indent: 20px;" class="lead px-2 text-justify"></p>
            <h2 class="lead d-flex justify-content-end text-primary text-uppercase">Price: </h2>
        </div>
    </div>
</div>
@endsection
