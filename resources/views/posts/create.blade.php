@extends('layouts.master')

@section('content')

    @include('welcome.navbar')
    
        <div class="container">
                            {{--  {{dd($pin->numbers)}}  --}}

                        @include('pages.carousel')
                        <h2>Drop a Question</h2>
                    <form action="/posts" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        {{--  <input type="hidden" name="_method" value="put">  --}}

                     <input  class="form-control" type="hidden" name="random"  value="{{$pin->numbers}}" >

                        @include('partials.errors')
                            <div class="contanier">

                            <div class="form-group">
                                <label class"label" for="title" >Title</label>
                                <input class="form-control col-lg-6" type="text" name="title" placeholder="Title">
                            </div>
                            <hr><br>

                            
                            <div class="form-group">
                                <label class"label" for="title" >File</label>
                                <input class="form-control col-lg-6" type="file" name="image" placeholder="Title">
                            </div>

                            <hr><br>
                            <div class="form-group"> 
                                <label class"label" for="content" >Content</label>
                                <textarea class="form-control" rows="6" name="body" placeholder="Place your Content Here........"></textarea>
                            </div>
                            <hr><br>
                              <div class="form-group col-lg-4">
                                    <input class="btn btn-block btn-submit" type="submit" >
                                    &nbsp;
                                </div>
                  
                         </div>
                    </form>
            </div>

    @include('pages.footer')
@endsection