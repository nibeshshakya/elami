@extends('layouts.main')


@section('content')

    <div class="container">
        {{--create garne form garne--}}
        @if($product)
            <form action="{{ url('/product/update') }}" method="POST">
                <div>
                    <label for="Product category">Product category</label>
                    <select name="category" id="category" class="btn dropdown">
                        <option value="{{ $product->category }}">{{ $product->category }}</option>
                        <option value="fruit">fruit</option>
                        <option value="vegitable">vegitable</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Product Name">Product Name</label>
                    <input type="text" id="name" name="name" value="{{ $product->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Product Name">Product title</label>
                    <input type="text" id="title" name="title" value="{{ $product->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Product price">Product Price</label>
                    <input type="text" id="price" name="price" value="{{ $product->price }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Product detail">Product detail</label>
                    <input type="text" id="detail" name="detail" value="{{ $product->detail }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Product image">Product image</label>
                    <input type="text" id="image" name="image" value="{{ $product->image }}" class="form-control">
                </div>

                <input type="submit" value="update" name="update" class="btn btn-primary">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="hidden" name="id" value="{{ $product->id }}">
            </form>
        @endif
    </div>

@endsection