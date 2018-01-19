@extends('layouts.master')

@section('content')


<a href="/posts/{{ $post->id}}"
    {{$post->body}}
        <p class="">{{$post->created_at->toDayDateTimeString() }} </p>
    
       -
    </a>
@endsection