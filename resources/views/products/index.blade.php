@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.products.create') }}"> Add a new product</a>
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
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <form action="{{ route('admin.products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('admin.products.show',$product->id) }}">Details</a>
    
                    <a class="btn btn-primary" href="{{ route('admin.products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
        {!! $products->links() !!}
</div>
    
@endsection