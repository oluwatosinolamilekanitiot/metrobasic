@extends('layouts.master')

@section('content')

{{--  @include('welcome.navbar')  --}}
<div class="contanier">

  @include('welcome.navbar')

  {{--  <h1>{{$post->title}}<h1>  --}}
   {{--  <h5> {{$post->file}}<h5>  --}}

    {{--  {{$post->body}}  --}}


        <form action="/reply" method="POST"> 
            {{ csrf_field() }}
            <div class="form-group">
                @if (Auth::check())

                <label class"label" for="users" >{{Auth::user()->name}}</label>
                @endif
            </div>
            <div class="form-group"> 
                    <label class"label" for="content" >Content</label>
                    <textarea class="form-control" rows="6" name="body" placeholder="Reply back your answers........"></textarea>
                </div>
                <hr><br>

                <div class="form-group col-lg-4">
                    <input class="btn btn-block btn-submit" type="submit" >
                    &nbsp;
                </div>
  
        </form>
</div>
  @include('pages.footer')
@endsection