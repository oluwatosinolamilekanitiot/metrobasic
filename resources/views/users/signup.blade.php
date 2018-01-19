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