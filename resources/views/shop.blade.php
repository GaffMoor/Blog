@extends('layouts.app') 
@section('content')
<div class="text-center">
    <h1>This is Apple Shop Page</h1>
</div>
<div class="container">

    <div class="form-group">
        <form action="/shop"  method="post">
            @csrf
            <div class="form-group col-md-8">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name">
            </div>

            <div class="form-group col-md-8">
                <label for="model">Model</label>
                <input class="form-control" type="text" name="model">
            </div>

            <div class="form-group col-md-8">
                <label for="price">Price</label>
                <input class="form-control" type="text" name="price">
            </div>

            <div class="form-group col-md-8">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="description"></textarea>
            </div>
            <div class="col ml-auto">
                <button type="submit" class="btn btn-primary">Add</button>

            </div>

        </form>


        <div class="list-group">
            @foreach ($products as $product)
            <div class="list-group">
                <ul class="form-group">
                    <li class="list-group-item">
                        <b>  {{$product->id}}</b>
                    </li>
                    <li class="list-group-item">
                        <b>Name:</b> {{$product->name}}
                    </li>
                    <li class="list-group-item">
                        <b>Model:</b> {{$product->model}}
                    </li>
                    <li class="list-group-item">

                        <b>Price:</b> {{$product->price}}
                    </li>
                    <li class="list-group-item">

                        <b>Description:</b> {{$product->description}}
                    </li>
                    <strong style="float:right">
                            Created {{$product->created_at}}
                        </strong>
                </ul>
            </div>

            @endforeach
        </div>

    </div>
</div>


@endsection