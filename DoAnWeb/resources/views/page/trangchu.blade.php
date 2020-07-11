@extends('master')
@section('header')
<head>
	<title>Tich Tech</title>
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
</head>
@endsection
@section('content')
<div class="page_menu">
	<!-- Banner -->
	<div class="banner">
		@foreach($slide as $sl)
		<div class="banner_background" style="background-image:url(source/images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="{{$sl->linkanh}}" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">Kỉ nguyên mới của điện thoại</h1>
						<div class="banner_price"><span>8.990.000₫</span>7.999.000₫</div>
						<div class="banner_product_name">Samsung Galaxy A51 (6GB/128GB)</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>

	<!-- Characteristics -->

	<div class="characteristics">
		<div class="container">
			<div class="row">

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="source/images/char_1.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Miễn phí vận chuyển</div>
							<div class="char_subtitle">Từ 1.000.000₫</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="source/images/char_2.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Đổi trả</div>
							<div class="char_subtitle">1 đổi 1 trong vòng 1 tháng</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="source/images/char_3.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Thanh toán</div>
							<div class="char_subtitle">tiền mặt,visa, trả góp</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="source/images/char_4.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Ưu Đãi Thành Viên</div>
							<div class="char_subtitle">giảm 10% đối với khách hàng thành viên</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deals of the week -->

	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
					
					<!-- Deals -->

					<div class="deals">
						<div class="deals_title">Deals of the week</div>
						<div class="deals_slider_container">
							
							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">
								<!-- Deals Item -->
								@foreach($new_product as $new)
								<div class="owl-item deals_item">
									<div class="deals_image"><a href="{{route('sanpham',$new->id)}}"><img src="{{$new -> linkanh}}" alt=""></a></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="{{route('themgiohang',$new->id)}}">mua</a></div>
											<div class="deals_item_price_a ml-auto">{{number_format($new ->giadau)}}₫</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name">{{$new ->tensp}}</div>
											<div class="deals_item_price ml-auto">{{number_format($new ->giasau)}}₫</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Có sẵn: <span>10</span></div>
												<div class="sold_title ml-auto">Đã bán: <span>40</span></div>
											</div>
											<div class="available_bar"><span style="width:20%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Kết thúc sau:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer3_hr" class="deals_timer_hr"></div>
														<span>giờ</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_min" class="deals_timer_min"></div>
														<span>phút</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_sec" class="deals_timer_sec"></div>
														<span>giây</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>

						</div>

						<div class="deals_slider_nav_container">
							<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
							<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
						</div>
					</div>
					
					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
									<li class="active">Nổi bật</li>
									<li>Khuyến mãi</li>
									<li>Đánh giá cao</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>

							<!-- Product Panel -->
							<div class="product_panel panel active">
								<div class="featured_slider slider">
									@foreach($product as $sp)
									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="{{route('sanpham',$sp->id)}}"><img style="width:115px;height:115px" src="{{$sp->linkanh}}" alt=""></a></div>
											<div class="product_content">
												<div class="product_price discount">{{number_format($sp->giasau)}}₫<span>{{number_format($sp->giadau)}}</span></div>
												<div class="product_name"><div><a href="{{route('sanpham',$sp->id)}}">{{$sp->tensp}}</a></div></div>
												<div class="product_extras">
													<button class="product_cart_button"><a style="color:white" href="{{route('themgiohang',$sp->id)}}">Thêm vào giỏ</a></button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">sale</li>
												<li class="product_mark product_new">mới</li>
											</ul>
										</div>
									</div>
									@endforeach
								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product Panel -->

							<div class="product_panel panel">
								<div class="featured_slider slider">
									@foreach($product_discout as $pr)
									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="{{route('sanpham',$pr->id)}}"><img style="width:115px;height:115px" src="{{$pr->linkanh}}" alt=""></a></div>
											<div class="product_content">
												<div class="product_price discount">{{number_format($pr->giasau)}}₫<span>{{number_format($pr->giadau)}}₫</span></div>
												<div class="product_name"><div><a href="{{route('sanpham',$pr->id)}}">{{$pr->tensp}}</a></div></div>
												<div class="product_extras">
													<div class="product_color">
													</div>
													<button class="product_cart_button"><a style="color:white" href="{{route('themgiohang',$pr->id)}}">Thêm vào giỏ</a></button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">sale</li>
												<li class="product_mark product_new">khuyến mãi</li>
											</ul>
										</div>
									</div>
									@endforeach
									
								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product Panel -->

							<div class="product_panel panel">
								<div class="featured_slider slider">
									@foreach($product_review as $pr_hot)
									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="{{route('sanpham',$pr_hot->id)}}"><img style="width:115px;height:115px" src="{{$pr_hot->linkanh}}" alt=""></a></div>
											<div class="product_content">
												<div class="product_price discount">{{number_format($pr_hot->giasau)}}₫<span>{{number_format($pr_hot->giadau)}}₫</span></div>
												<div class="product_name"><div><a href="{{route('sanpham',$pr_hot->id)}}">{{$pr_hot->tensp}}</a></div></div>
												<div class="product_extras">
													<div class="product_color">
													</div>
													<button class="product_cart_button"><a style="color:white" href="{{route('themgiohang',$pr_hot->id)}}">Thêm vào giỏ</a></button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">hot</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>
									@endforeach
								</div>

								<div class="featured_slider_dots_cover"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Banner -->

	<div class="banner_2">
		<div class="banner_2_background" style="background-image:url(source/images/banner_2_background.jpg)"></div>
		<div class="banner_2_container">
			<div class="banner_2_dots"></div>
			<!-- Banner 2 Slider -->

			<div class="owl-carousel owl-theme banner_2_slider">
				@foreach($Banner as $bn)
				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
										<div class="banner_2_category"></div>
										<div class="banner_2_title">{{$bn->tensp}}</div>
										<div class="banner_2_text">{{$bn->mota}}</div>
										<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="button banner_2_button"><a href="{{route('sanpham',$bn->id)}}">Chi tiết</a></div>
									</div>
									
								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
										<div class="banner_2_image"><img style="width:400px;height:460px"src="{{$bn->linkanh}}" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>

	<!-- Hot New Arrivals -->

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
										@foreach($product_2 as $new)
										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="{{route('sanpham',$new->id)}}"><img style="width:100px;height:84px" src="{{$new->linkanh}}" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">{{number_format($new->giasau)}}₫</div>
													<div class="product_name"><div><a href="{{route('sanpham',$new->id)}}">{{$new->tensp}}</a></div></div>
													<div class="product_extras">
														<div class="product_color">
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
							<!--Product Panel -->
							<div class="col-lg-3">
								<div class="arrivals_single clearfix">
									@foreach($product_discout2 as $pr_1)
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><a href="{{route('sanpham',$pr_1->id)}}"><img src="{{$pr_1->linkanh}}" alt=""></a></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="{{route('sanpham',$pr_1->id)}}">{{$pr_1->tensp}}</a></div>
												<div class="arrivals_single_price text-right">{{number_format($pr_1->giadau)}}₫</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<form action="#"><button class="arrivals_single_button"><a style="color:white" href="{{route('themgiohang',$pr_1->id)}}">Thêm vào giỏ</a></button></form>
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">mới</li>
										</ul>
									</div>
								</div>
								@endforeach
							</div>
						</div>			
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_1.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_2.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_3.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_4.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_5.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_6.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_7.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="source/images/brands_8.jpg" alt=""></div></div>

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>
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
	@endsection