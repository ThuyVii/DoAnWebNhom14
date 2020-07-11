<div class="super_container">
	 
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{URL::to('source/images/phone.png')}}" alt=""></div>0328046670</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{URL::to('source/images/mail.png')}}" alt=""></div><a href="#">18520878@gm.uit.edu.vn</a></div>
						<div class="top_bar_content ml-auto">
							
							<div class="top_bar_user">
								<div class="user_icon"><img src="{{URL::to('source/images/user.svg')}}" alt=""></div>
								<div><a href="{{route('dangky')}}">Đăng kí</a></div>
								<div><a href="{{route('dangnhap')}}">Đăng nhập</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo">
								<a href="{{route('trangchu')}}">
									<img src="{{URL::to('source/images/logo.png')}}">
								</a>
							</div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="{{route('search')}}" class="header_search_form clearfix">
										<input type="text" name="key" required="required" class="header_search_input" placeholder="Tìm kiếm sản phẩm...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc"></span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													
												</ul>
											</div>
										</div>
										<!-- <input type="submit" class="header_search_button trans_300"> -->
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{URL::to('source/images/search.png')}}" alt=""></button>
										<!-- <button type="submit" class="header_search_button trans_300" value="Submit"><img src="source/images/search.png" alt=""></button> -->
										
									</form>
								</div>
							</div>
						</div>
					</div>

					
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<img src="{{URL::to('source/images/cart2.png')}}" alt="" class="mycart">
									<div class="cart_icon">
										
										<!-- <div class="cart_count"><span>0</span></div> -->
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="{{route('themgiohang',13)}}">Giỏ hàng</a></div>
										<div class="cart_price"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav style="background-color:#EEEEEE" class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_menu_text">Xin Chào Mọi Người</div>
								</div>
							</div>

							<!-- Main Nav Menu -->

							<div style="" class="main_nav_menu ml-auto">
								<ul style="" class="standard_dropdown main_nav_dropdown">
									<li style="padding-left:80px;"><a href="{{route('trangchu')}}">Trang chủ<i class="fas fa-chevron-down"></i></a></li>
									<li style="padding-left:80px;"class="hassubs">
										<a href="{{route('sanpham',13)}}">Chi Tiết Sản Phẩm<i class="fas fa-chevron-down"></i></a>
									</li>
									<li style="padding-left:80px;"><a href="{{route('gioithieu')}}">Giới Thiệu<i class="fas fa-chevron-down"></i></a></li>
									<li style="padding-left:80px;"><a href="{{route('lienhe')}}">Liên Hệ<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
</header>
</div>