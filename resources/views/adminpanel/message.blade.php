@extends('layouts.adminmaster')

@section('content')


    @include('partials.errors')
    @foreach($messages as $message)

        <ul class="list-group">
            <li class="list-group-item">Name:{{$message->name}}</li>
            <li class="list-group-item">Email:{{$message->email}}</li>
            <li class="list-group-item">Subject:{{$message->subject}}</li>
            <li class="list-group-item">Message:{{$message->message}}</li>
            

        </ul>
    @endforeach
@endsection