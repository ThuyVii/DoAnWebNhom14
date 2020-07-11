@extends('master')
@section('header')
<head>
<title>Cart</title>
<link rel="icon" href="{{URL::to('source/images/title-icon.png')}}" type="image/png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{URL::to('source/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>



	<link rel="stylesheet" href="{{URL::to('source/dathang/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('source/dathang/vendors/colorbox/example3/colorbox.css')}}">
	<link rel="stylesheet" title="style" href="{{URL::to('source/dathang/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::to('source/dathang/css/animate.css')}}">


<link rel="stylesheet" title="style" href="{{URL::to('source/dathang/css/huong-style.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/cart_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/cart_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('source/styles/custom/custom.css')}}">


</head>

@endsection
@section('content')
<form action="{{route('dathang')}}" method="post" class="beta-form-checkout">
	@if(Session::has('thanhcong'))
	<div class="alert alert-success">{{Session::get('thanhcong')}}"</div>
	@endif
     <div class="cart_section">
		<div class="container">
			<div class="row">
            @if(Session::has('cart'))
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Giỏ Hàng</div>
                         @foreach($product_cart as $product)
						<div class="cart_items">
							<ul class="cart_list">
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="{{$product['item']['linkanh']}}" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Tên Sản Phẩm</div>
											<div class="cart_item_text">{{$product['item']['tensp']}}</div>
										</div>
										<div class="cart_item_color cart_info_col">
											
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Số Lượng</div>
											<div class="cart_item_text">{{$product['qty']}}</div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Giá bán</div>
											<div class="cart_item_text">{{number_format($product['item']['giasau'])}}₫</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<button><a href="{{route('xoagiohang',$product['item']['id'])}}">xóa</a></button>
										</div>
									</div>
								</li>
							</ul>
						</div>
                        @endforeach
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Tổng hóa đơn :</div>
								<div class="order_total_amount">{{number_format($totalPrice)}}₫</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        @endif
    </div>
     <input type="hidden" name="_token" value="{{csrf_token()}}">
	    <!-- <div style="padding-right:50px; " class="row"> @if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div> -->
				<div class="row" style="justify-content: center" >
					<div class="col-sm-6" style="">
						<h4>Đặt hàng</h4>
						<div class="space20">&nbsp;</div>

						<div class="form-block">
							<label for="name">Họ tên*</label>
							<input type="text" id="name" name="name" placeholder="Họ tên" required>
						</div>
						<div class="form-block">
							<label>Giới tính </label>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>
										
						</div>

						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" required placeholder="expample@gmail.com">
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ*</label>
							<input type="text" id="adress" name="address" placeholder="Street Address" required>
						</div>
						

						<div class="form-block">
							<label for="phone">Điện thoại*</label>
							<input type="text" id="phone" name="phone" required>
						</div>
						
						<div class="form-block">
							<label for="notes">Ghi chú</label>
							<textarea id="notes" name="notes"></textarea>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="your-order">
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="" >
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="" >
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li>
									
								</ul>
							</div>

							<div class="text-center"><button type="submit" class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
						</div> <!-- .your-order -->
					</div>
				</div>
	</form>
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
<script src="{{URL::to('plugins/easing/easing.js"></script>
<script src="{{URL::to('js/cart_custom.js"></script>
@endsection	