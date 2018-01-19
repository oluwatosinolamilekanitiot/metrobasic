@extends('layouts.master')

@section('content')
    <h1> send the answers</h1>
    <div class="contanier">
        <form action="/reply" method="POST"> 
            {{ csrf_field() }}
            <div class="form-group">
                <label class"label" for="users" >Select Users</label>
                
            </div>
            <div class="form-group"> 
                    <label class"label" for="content" >Content</label>
                    <textarea class="form-control" rows="6" name="body" placeholder="Place your Content Here........"></textarea>
                </div>
                <hr><br>
        </form>
</div>
    
@endsection