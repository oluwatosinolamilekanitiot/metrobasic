@extends('layouts.dashboard')


@section('content')
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Create Admin</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="name"  placeholder="Enter Users Name" autofocus required>
          </div>

          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email address" autofocus required>
          </div>

          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email address" autofocus required>
          </div>

           <div class="form-group">
                <label for="Role">Role for Users:</label>
                <select class="form-control" id="sel1">
                    <option>Roles</option>
                    <option>Admin</option>
                    <option>Moderators</option>
                    <option>Users</option>
                </select>
            </div> 
          {{--  <a class="btn btn-primary btn-block" href="login.html">Reset Password</a>  --}}
        </form>
        
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

@endsection