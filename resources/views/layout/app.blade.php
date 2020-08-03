<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Lavoro | Home 1</title>
		@yield('style')
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		
		<!-- Fonts
		============================================ -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		
 		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="https://kit.fontawesome.com/7eb041dab2.js" crossorigin="anonymous"></script>

		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
           	
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
        
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		
		<!-- font-icon CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('fonts/font-icon.css')}}">
		
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
		
		<!-- mobile menu CSS
		============================================ -->
		<link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
		
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="{{asset('custom-slider/css/nivo-slider.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('custom-slider/css/preview.css')}}" type="text/css" media="screen" />
        
 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        
 		<!-- normalize CSS
		============================================ -->        
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
   
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        
        <!-- responsive CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body class="home-one">
		@if (get_data_user('web','active')==1)
		<p>Tài Khoản của bạn chưa được kích hoạt,vui lòng check mail để kích hoạt tài khoản</p>
	@endif
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
		<!-- header area start -->
		@include('master.header')
		@if (Session::has('errors'))
<div class="pull-right alert alert-warning" style=" position: relative;display: block;width: 50%;text-align: center;transform: translateX(-50%)	">
    <strong>Cảnh báo</strong> {{session('errors')->first('errors')}}
  </div>
@endif
@if (Session::has('danger'))
<div class="pull-right alert alert-danger" style=" display: block;right:0; position: fixed">
    <strong>Thất Bại!</strong> {{session('danger')}}
  </div>
@endif
@if (Session::has('sucesss'))
<div class="pull-right alert alert-success" style="position: relative;display: block;width: 50%;text-align: center;transform: translateX(-50%)">
    <strong>Success!</strong> {{session('sucesss')}}
  </div>
@endif
		
        @yield('content')
		
		<!-- FOOTER START -->
		@include('master.footer')
		<!-- FOOTER END -->
		
		<!-- JS -->
		@yield('css')
        
 		<!-- jquery-1.11.3.min js
		============================================ -->         
        <script src="{{asset('js/vendor/jquery-1.11.3.min.js')}}"></script>
        
 		<!-- bootstrap js
		============================================ -->         
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
		
		<!-- Nivo slider js
		============================================ --> 		
		<script src="{{asset('custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
		<script src="{{asset('custom-slider/home.js')}}" type="text/javascript"></script>
        
   		<!-- owl.carousel.min js
		============================================ -->       
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
		
		<!-- jquery scrollUp js 
		============================================ -->
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
		
		<!-- price-slider js
		============================================ --> 
        <script src="{{asset('js/price-slider.js')}}"></script>
		
		<!-- elevateZoom js 
		============================================ -->
		<script src="{{asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
		
		<!-- jquery.bxslider.min.js
		============================================ -->       
        <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
		
		<!-- mobile menu js
		============================================ -->  
		<script src="{{asset('js/jquery.meanmenu.js')}}"></script>	
        
   		<!-- wow js
		============================================ -->       
        <script src="{{asset('js/wow.js')}}"></script>
        
   		<!-- plugins js
		============================================ -->         
        <script src="{{asset('js/plugins.js')}}"></script>
        
   		<!-- main js
		============================================ -->           
		<script src="{{asset('js/main.js')}}"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="{{asset('js/my.js')}}" ></script>
		<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5e74db5deec7650c33217778/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
	<style>
		#scrollUp
		{
			bottom: 88px !important;
		}
	</style>
		@yield('script')
		@yield('carosel')
    </body>
</html>