@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Orders</h2>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-bordered">
                    <tr>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->relationProduct->brand }}</td>
                            <td>{{ $product->relationProduct->category }}</td>
                            <td>{{ $product->relationProduct->price }}</td>
                            <td>{{ $product->performed ? 'performed' : 'waiting'}}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('admin.products.show',$product->relationProduct->id) }}">Details</a>
                                <a class="btn btn-success" href="{{ route('admin.orders.confirm', $product->id) }}">Perform</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection