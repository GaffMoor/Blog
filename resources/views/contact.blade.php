@extends('layouts.app') 
@section('content')
<div class="text-center">
<h1>This is Contact Page</h1>
</div>
<div class="container">

<div class="form-group">
    <form action="/contact" method="post">
        @csrf
        <div class="form-group col-md-8">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name">
        </div>

        <div class="form-group col-md-8">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email">
        </div>

        <div class="form-group col-md-8">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="message"></textarea>
        </div>
<div class="col ml-auto">
        <button type="submit" class="btn btn-primary">Send</button>

</div>

    </form>

</div>

<div class="list-group">
    @foreach ($messages as $message)
    <div class="list-group">
        <ul class="form-group">
            <li class="list-group-item">
                <b>  {{$message->id}}</b>
            </li>
            <li class="list-group-item">
                <b>Name:</b> {{$message->name}}
            </li>
            <li class="list-group-item">
                <b>Email:</b> {{$message->email}}
            </li>
            <li class="list-group-item">

                <b>Message:</b> {{$message->message}}
            </li>
            <strong style="float:right">
                Created {{$message->created_at}}
            </strong>
        </ul>
    </div>

    @endforeach
</div>
</div>

@endsection