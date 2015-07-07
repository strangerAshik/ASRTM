<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
        <title>ASRTM | Aviation ERP</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <!-- On-line-->
   	   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	   <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	   <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     
       <!--Time Picker-->
       {{ HTML::style('css/timepicker/bootstrap-timepicker.min.css') }}
       <script src="{{URL::asset('js/plugins/timepicker/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
        <!--End Time Picker-->
       
        <!-- iCh
	
	 <!--End On-Line--->
	   <!--off Line
	  
	   {{ HTML::style('css/onlineLinks/bootstrap.min.css') }}
	   {{ HTML::style('css/onlineLinks/font-awesome.min.css') }}      
	   {{ HTML::style('css/onlineLinks/ionicons.min.css') }}
	   <script src="{{URL::asset('css/onlineLinks/jquery.min.js')}}" type="text/javascript"></script>
		
		End Off Line--->
        <!-- Morris chart -->
		{{ HTML::style('css/morris/morris.css') }}
		
		
		
        <!-- jvectormap -->
        
		{{ HTML::style('css/jvectormap/jquery-jvectormap-1.2.2.css') }}
        <!-- Date Picker -->
     
		{{ HTML::style('css/datepicker/datepicker3.css') }}
        <!-- Daterange picker -->
       
		{{ HTML::style('css/daterangepicker/daterangepicker-bs3.css') }}
        <!-- bootstrap wysihtml5 - text editor -->
        
		{{ HTML::style('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}
        <!-- Theme style -->
       
		{{ HTML::style('css/AdminLTE.css') }}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		{{ HTML::style('search/css/selectize.css') }}
		{{ HTML::script('search/js/selectize.js') }}
		 <style type="text/css">
		.demo-animals .scientific {
			font-weight: normal;
			opacity: 0.3;
			margin: 0 0 0 2px;
		}
		.demo-animals .scientific::before {
			content: '(';
		}
		.demo-animals .scientific::after {
			content: ')';
		}
		</style>
    </head>
    <body class="skin-blue">
				
        <!-- header logo: style can be found in header.less -->
        <header class="header">
           @include('header')
		   @yield('header')
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
           
		   <aside class="left-side sidebar-offcanvas">
               @include('left_sidebar')
			   @yield('left_sidebar')
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
			
				 <section class="content-header">
                   <!-- <h1>
                        Qualification
                        <small>Employee Qualification</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Qualification</a></li>
                        <li class="active">{{$PageName}}</li>
                    </ol>-->
				 </section>
			
			<!--Success Massage--->
			@if(Session::has('message'))
				 
				 <div id='myAlert' class='alert alert-success'>
							   <a href='#' class='close' data-dismiss='alert'>&times;</a>
							   <strong>Message: </strong>  {{Session::get('message')}}
				</div>
			@endif 
			<!--End success massage-->
			<!--Start error massage-->
			@if(Session::has('error'))
				
				 <div id='myAlert' class='alert alert-warning'>
							   <a href='#' class='close' data-dismiss='alert'>&times;</a>
							   <strong>Error: </strong> {{Session::get('error')}}
				</div>
				@endif 
			  @if($errors->any())
			  <div>
				<ul class="alert alert-warning">
				   <div id='myAlert' class='alert alert-warning'>
							   <a href='#' class='close' data-dismiss='alert'>&times;</a>
							   <strong>Error list: </strong>  {{ implode('', $errors->all('<li>:message</li>'))}}

				</ul>
			  </div>
			  @endif
			  <!--End error massage-->
			
                <!-- Main content -->
               @yield('content')
			  
            </aside><!-- /.right-side -->
			
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

		
      
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
		
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{ URL::asset('js/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="{{ URL::asset('js/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="{{URL::asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{URL::asset('js/plugins/jqueryKnob/jquery.knob.js')}}" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="{{URL::asset('js/plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="{{URL::asset('js/plugins/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{URL::asset('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{URL::asset('js/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="{{URL::asset('js/AdminLTE/app.js')}}" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{URL::asset('js/AdminLTE/dashboard.js')}}" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="{{URL::asset('js/AdminLTE/demo.js')}}" type="text/javascript"></script>
      

         
	
    </body>
</html>
