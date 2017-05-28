@extends('layouts.main')


@section('content')

    <div class="container">
        {{--create garne form garne--}}
        <form action="" method="POST">
            <div>
                <label for="Product category">Product category</label>
                <select name="category" id="category" class="btn dropdown">
                    <option value="cloth">cloth</option>
                    <option value="fruit">fruit</option>
                    <option value="vegitable">vegitable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Product Name">Product Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="Product Name">Product title</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="Product price">Product Price</label>
                <input type="text" id="price" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="Product detail">Product detail</label>
                <input type="text" id="detail" name="detail" class="form-control">
            </div>
            <div class="form-group">
                <label for="Product image">Product image</label>
                <input type="text" id="image" name="image" class="form-control">
            </div>

            <input type="submit" value="create" name="submit" class="btn btn-primary">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>

@endsection