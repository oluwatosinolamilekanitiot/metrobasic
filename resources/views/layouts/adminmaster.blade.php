<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> Metrobasicmaths Post Question </title>

         <!-- Bootstrap CSS -->    
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="admin/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="admin/css/owl.carousel.css" type="text/css">
	<link href="admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="admin/css/fullcalendar.css">
	<link href="admin/css/widgets.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/style-responsive.css" rel="stylesheet" />
	<link href="admin/css/xcharts.min.css" rel=" stylesheet">	
	<link href="admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
        
		<!--  CSS -->
        
            {{--  <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet"> 
            <link href="{{ asset('admin/css/bootstrap-theme.css') }}" rel="stylesheet"> 
            <link href="{{ asset('admin/css/elegant-icons-style.css') }}" rel="stylesheet"> 
            <link href="{{ asset('admin/css/font-awesome.min.css.css') }}" rel="stylesheet"> 
            <link href="{{ asset('admin/css/font-awesome.min.css.css') }}" rel="stylesheet">           
            
            <link rel="stylesheet" type="text/css" href="css/imagehover.min.css"> 
            <link href="{{ asset('css/style.css') }}" rel="stylesheet">
            <link href="{{ asset('css/lake.css') }}" rel="stylesheet">
              --}}

            @yield('style')
            
    </head>
	<body>


    @yield('content')

                  
                    



    <!-- JavaScript -->

    
    <!-- javascripts -->
    <script src="admin/js/jquery.js"></script>
	<script src="admin/js/jquery-ui-1.10.4.min.js"></script>
    <script src="admin/js/jquery-1.8.3.min.js"></script>
    <script src="admin/js/jquery-1.8.3.min.js"></script>    
    <script type="text/javascript" src="admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    
    <!-- bootstrap -->
    <script src="admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="admin/js/jquery.scrollTo.min.js"></script>
    <script src="admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="admin/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="admin/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="admin/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="admin/js/calendar-custom.js"></script>
	<script src="admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="admin/js/jquery.customSelect.min.js" ></script>
	<script src="admin/assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="admin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="admin/js/sparkline-chart.js"></script>
    <script src="admin/js/easy-pie-chart.js"></script>
	<script src="admin/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="admin/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="admin/js/xcharts.min.js"></script>
	<script src="admin/js/jquery.autosize.min.js"></script>
	<script src="admin/js/jquery.placeholder.min.js"></script>
	<script src="admin/js/gdp-data.js"></script>	
	<script src="admin/js/morris.min.js"></script>
	<script src="admin/js/sparklines.js"></script>	
	<script src="admin/js/charts.js"></script>
	<script src="admin/js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

	</body>
</html>