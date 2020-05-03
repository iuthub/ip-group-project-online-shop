@extends('products.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center py-4">
        <h1 class="display-3">Item</h1>
    </div>
    <div class="row align-items-center">
        <div class="col-md-6 bg-light align-self-center image-position">
            <img style="width:100%" src="https://www.kindpng.com/picc/m/134-1345320_chocolate-png-image-chocolate-png-transparent-png.png">
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
            <br>
            <h2 class="lead d-flex justify-content-center text-primary text-uppercase">Brief description</h2>
            <p style="text-indent: 20px;" class="lead px-2 text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis minima facere impedit quibusdam officia necessitatibus nihil nulla quas quod magni tempore aperiam, reiciendis, accusantium laudantium asperiores, nam consectetur obcaecati dolore alias omnis ad ex cupiditate qui? Aspernatur excepturi possimus nesciunt ad voluptate harum, sint alias maxime totam numquam molestias! Minima accusantium nostrum ipsam quo quibusdam, aut, vero nulla dolor repellat saepe similique et beatae molestias libero laboriosam neque earum at. Maxime eligendi aliquam veniam debitis non ex voluptatum molestiae. Veritatis quae eveniet, illum neque inventore vitae ut fugiat facilis sit at debitis similique deserunt tempora molestiae reprehenderit est aliquid qui.</p>
        </div>
    </div>
</div>
<div class="forms">
    <h2>Some text</h2>
</div>

@endsection