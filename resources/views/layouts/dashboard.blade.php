
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Admin Panel</title>

        <!-- Bootstrap CSS -->
        {{--  <link href="{{ ('css/sd-admin.css') }}" rel="stylesheet">  --}}
        {{--  <link href="{{ ('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ ('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ ('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
        <link href="{{ ('css/sd-admin.min.css') }}" rel="stylesheet">  --}}
        <link href="{{ ('css/sd-admin.min.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/sd-admin.min.css">
        <link href="{{ ('css/sd-admin.min.css') }}" rel="stylesheet">  
        
        
        
        

        @yield('style')


        
        
        
        
	</head>
	<body>

                @yield('content')

    </body>

        <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
</html>