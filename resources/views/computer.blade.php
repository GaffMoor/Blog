@extends('layouts.app')
@section('content')

<div class="form-group">
    <form action="/computer"  method="post">
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
</div>


<div class="list-group">
    @foreach ($computers as $computer)
    <div class="list-group">
        <ul class="form-group">
            <li class="list-group-item">
                <b>  {{$computer->id}}</b>
            </li>
            <li class="list-group-item">
                <b>Name:</b> {{$computer->name}}
            </li> 
            <li class="list-group-item">
                <b>Model:</b> {{$computer->model}}
            </li>
            <li class="list-group-item">

                <b>Price:</b> {{$computer->price}}
            </li>
            <li class="list-group-item">

                <b>Description:</b> {{$computer->description}}
            </li>
            <strong style="float:right">
                    Created {{$computer->created_at}}
                </strong>
        </ul>
    </div>

    @endforeach
</div>


@endsection