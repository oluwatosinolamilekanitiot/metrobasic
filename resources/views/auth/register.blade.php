@extends('layouts.users')

@section('content')

<body class="login-img3-body">

    <div class="container">
        {{--  @include('partials.error')  --}}

      <form class="login-form {{ $errors->has('name') ? ' has-error' : '' }}" action="/signup" method="POST">        
        {{ csrf_field() }}

        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            

            <div class="input-group">
                <label for="fullname" class="control-label">Enter Full  Name <span class="required">*</span></label>            
              <input type="text" name="name"class="form-control" placeholder="Name" value="{{ old('name') }}" required autofocus>
            </div>
            
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

            <div class="input-group">
                <label for="email" class="control-label">E-mail Address <span class="required">*</span></label>            
              <input type="text" name="email"class="form-control" placeholder="Email Address" value="{{ old('email') }}" required autofocus >
            </div>
                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                     @endif

            
            <div class="input-group">
                <label for="Number" class="control-label">Phone Number <span class="required">*</span></label>            
              <input type="text" name="number" class="form-control" placeholder="Phone Number"value="{{ old('number') }}" required autofocus>
            </div>            
                    
                                @if ($errors->has('number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif

            
            <div class="input-group">
                <label for="Password" class="control-label">Enter Password <span class="required">*</span></label>            
              <input type="password" name="password"class="form-control" placeholder="Password" required autofocus>
            </div>

            
            <div class="input-group">
                <label for="password-confirm" class="control-label">Confirm Password <span class="required">*</span></label>            
              <input type="password"  name="password_confirmation" class="form-control"  placeholder="Password" required autofocus>
            </div>

            
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
        </div>
      </form>
  
    </div>


</body>

@endsection


{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}
{{--  @endsection  --}}
