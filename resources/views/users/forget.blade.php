@extends('layouts.users')

@section('content')

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="{{ route('login') }}" method="POST"> 
            {{ csrf_field() }}
            @include('partials.errors')
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon">Email<i class="icon_profile"></i></span>
              <input type="text" class="form-control"  name="email" placeholder="email"  autofocus required>
                        
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Send password reset link</button>
        </div>
      </form>
   
    </div>


  </body>


  @endsection