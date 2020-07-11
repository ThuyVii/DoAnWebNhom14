@extends('master')
@section('header')
<head>
<title>Tich Tech</title>
<!-- This is the logo on the title -->
<link rel="icon" href="source/images/title-icon.png" type="image/png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="source/styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="source/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="source/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="source/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="source/styles/custom/custom.css">
</head>
@endsection
@section('content')
<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Điện Thoại </div>
							<ul class="clearfix">
								<li class="active"></li>
								<li></li>
								<li></li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">
                                         @foreach($product as $new)
										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img style="width:100px;height:84px" src="{{$new->linkanh}}" alt=""></div>
												<div class="product_content">
													<div class="product_price">{{number_format($new->giadau)}}₫</div>
													<div class="product_name"><div><a href="{{route('sanpham',$new->id)}}">{{$new->tensp}}</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a style="color:white" href="{{route('themgiohang',$new->id)}}">Thêm vào giỏ</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">mới</li>
												</ul>
											</div>
										</div>
                                     @endforeach
										
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>
							</div>
						</div>			
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection
@section('javascript')
<script src="source/js/jquery-3.3.1.min.js"></script>
<script src="source/styles/bootstrap4/popper.js"></script>
<script src="source/styles/bootstrap4/bootstrap.min.js"></script>
<script src="source/plugins/greensock/TweenMax.min.js"></script>
<script src="source/plugins/greensock/TimelineMax.min.js"></script>
<script src="source/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="source/plugins/greensock/animation.gsap.min.js"></script>
<script src="source/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="source/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="source/plugins/slick-1.8.0/slick.js"></script>
<script src="source/plugins/easing/easing.js"></script>
<script src="source/js/custom.js"></script>
@endsection