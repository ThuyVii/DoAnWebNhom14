@extends('master')
@section('header')
<head>
<title>Tich Tech</title>
<!-- This is the logo on the title -->
<link rel="icon" href="{{URL::to('source/images/title-icon.png')}}" type="image/png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{URL::to('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/plugins/slick-1.8.0/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/custom/custom.css')}}">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="{{URL::to('dathang/assets/dest/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{URL::to('dathang/assets/dest/vendors/colorbox/example3/colorbox.css')}}">
<link rel="stylesheet" title="style" href="{{URL::to('dathang/assets/dest/css/style.css')}}">
<link rel="stylesheet" href="{{URL::to('dathang/assets/dest/css/animate.css')}}">
<link rel="stylesheet" title="style" href="{{URL::to('dathang/assets/dest/css/huong-style.css')}}">
</head>
 
 @endsection
 @section('content')
 <div class="container">
		<div id="content">
			
			<form action="{{route('dangnhap')}}" method="post" class="beta-form-checkout">
			  <input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
				   @if(Session::has('flag'))
				   <div class="alert alert-{{Session::get('flag')}}">{{Session::get('thongbao')}}"</div>
				   @endif
					<div class="col-sm-3"></div>
					<div class="sign-in">
						<h4>Đăng nhập</h4>
						
						<div class="form-block">
							<!-- <label for="email">Email address*</label> -->
							<input class="text-box	" type="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-block">
							<!-- <label for="phone">Password*</label> -->
							<input class="text-box" type="password" name="password" placeholder="Password" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->

 @endsection
@section('javascript')
<script src="{{URL::to('source/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::to('source/styles/bootstrap4/popper.js')}}"></script>
<script src="{{URL::to('source/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{URL::to('source/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{URL::to('source/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{URL::to('source/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{URL::to('source/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{URL::to('source/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{URL::to('source/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{URL::to('source/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{URL::to('source/plugins/easing/easing.js')}}"></script>
<script src="{{URL::to('source/js/custom.js')}}"></script>

<script src="{{URL::to('dathang/assets/dest/js/jquery.js')}}"></script>
<script src="{{URL::to('dathang/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="{{URL::to('dathang/assets/dest/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{URL::to('dathang/assets/dest/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{URL::to('dathang/assets/dest/vendors/animo/Animo.js')}}"></script>
<script src="{{URL::to('dathang/assets/dest/vendors/dug/dug.js')}}"></script>
<script src="{{URL::to('dathang/assets/dest/js/scripts.min.js')}}"></script>
@endsection
