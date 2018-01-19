@extends('layouts.master')

@section('content')


        @include('welcome.navbar')
        
        <div class="container">

            <h1>Enter Your PIN</h1>
            

            @include('partials.errors')
            <form method="POST" action=/enter>
                    {{ csrf_field() }}
                {{--  <input  class="form-control" type="hidden" name="random"  value="{{$random}}" required>   --}}
                    {{--  <input type="hidden" name="_method" value="put">  --}}


                    <div class="form-group col-lg-6">
                                <label for="name">PIN <span>*</span></label>
                                <input  class="form-control" type="text" name="random" id="name" value="" required>
                                
                    </div>

                    <hr>
                <div class="form-group col-lg-2">
                    <input class="btn btn-block btn-submit" type="submit" name="submit" value="Submit">
                    &nbsp;
                </div>
            </form>
            
        </div>

        @include('pages.footer')
        
@endsection