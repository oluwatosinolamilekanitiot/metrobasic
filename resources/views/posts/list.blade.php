@extends('layouts.master')  

@section('content')

<div class="contanier">

    @include('welcome.navbar')

    

    {{--  {{ URL::asset($Post[0]["file"]) }}  --}}

    <img src="{{ URL::asset($Post[0]["file"]) }}" width="600px" height="500px"/>


    @include('pages.footer')
@endsection