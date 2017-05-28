@extends('layouts.main')


@section('content')

    <div class="container">

        @if(isset($message))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ $message }}
            </div>
        @endif
        <a href="{{ route('addproduct') }}" class="btn btn-primary">Add New Product</a>
        <hr>
        <table class="table table-responsive table-bordered">
            <thead>
            <tr>
                <th>s.no</th>
                <th>Name</th>
                <th>title</th>
                <th>Detail</th>
                <th>Price</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @if(isset($products))
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->detail }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category }}</td></td>
                        <td>
                        <td><img src="{{ $product->image }}" alt="caption" height="100px" width="100px" class="image-responsive">
                            <a href="{{ route('editproduct', ['id' => $product->id]) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('deleteproduct', ['id' => $product->id]) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    {{--table define garne--}}


@endsection