@extends('master')
@section('header')
<head>
	<title>Single Product</title>
	<link rel="icon" href="{{URL::to('source/images/title-icon.png')}}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="OneTech shop project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/bootstrap4/bootstrap.min.css')}}">
	<link href="{{URL::to('source/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('source/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('source/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('source/plugins/OwlCarousel2-2.2.1/animate.css')}}">

	<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/product_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/main_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/product_responsive.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/custom/custom.css')}}">
</head>
@endsection
@section('content')
<div class="super_container">
		<div class="single_product">
			<div class="container">
				<div class="row">

					<!-- Images -->
					<!-- Selected Image -->
					<div class="col-lg-5 order-lg-2 order-1">
						<div class="image_selected"><img src="{{$sanpham[0]->linkanh}}" alt=""></div>
					</div>

					<!-- Description -->
					<div class="col-lg-5 order-3">
						<div class="product_description">
							<div class="product_category"></div>
							<div class="product_name">{{$sanpham[0]->tensp}}</div>
							<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
							<div class="product_text"><p>
								<li>{{$sanpham[0]->mota}}</li>
							</p></div>
							<div class="order_info d-flex flex-row">
								<form action="#">
									<div class="clearfix" style="z-index: 2">

										<!-- Product Quantity -->
										<div class="product_quantity clearfix">
											<span><b>Số Lượng:{{$sanpham[0]->soluong}}</b></span>
											<input id="quantity_input" type="text" pattern="[0-9]*" value="">
											<div class="quantity_buttons">
												<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
												<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
											</div>
										</div>
									</div>
									<div class="product_price">{{number_format($sanpham[0]->giasau)}}₫</div>
									<div class="button_container">
										<button type="button" class="button cart_button"><a style="color:white" href="{{route('themgiohang',$sanpham[0]->id)}}">Thêm vào giỏ</a></button>
										<div class="product_fav"><i class="fas fa-heart"></i></div>
									</div>

								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
  </div>
@endsection
@section('javascript')
<script src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::to('styles/bootstrap4/popper.js')}}"></script>
<script src="{{URL::to('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{URL::to('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{URL::to('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{URL::to('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{URL::to('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{URL::to('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{URL::to('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{URL::to('plugins/easing/easing.js')}}"></script>
<script src="{{URL::to('js/product_custom.js')}}"></script>
@endsection		

		
