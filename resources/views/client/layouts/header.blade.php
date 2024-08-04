<header id="header" class="header style2 style9">
	<div class="main-header">
		<div class="container">
			<div class="main-menu-wapper">
				<div class="row">
					<div class="col-sm-12 col-md-2">
						<div class="logo">
							<a href="#"><img src="{{ asset('style/images/logos/3.png') }}" alt=""></a>
						</div>
					</div>
					<div class="col-sm-12 col-md-10">
						<div class="box-control">
							
							<form action="{{ route('client.shops.searchProduct') }}" class="box-search show-icon" method="get">
								{{-- @csrf --}}
								<span class="icon"><span class="pe-7s-search"></span></span>
								<div class="inner">
									<input type="text" name="query" class="search" placeholder="Tìm kiếm...">
									<button type="submit" class="button-search"><span class="pe-7s-search"></span></button>
								</div>
							</form>

							<div class="mini-cart">
								<a class="cart-link" href="#"><span class="pe-7s-cart"></span> <span
										class="count">3</span></a>
								<div class="show-shopping-cart">
									<h3 class="title">Bạn có <span class="text-primary">(2 mặt hàng)</span> trong giỏ
										hàng</h3>
									<ul class="list-product">
										<li>
											<div class="thumb">
												<img src="{{ asset('style/images/products/1.png') }}" alt="">
											</div>
											<div class="info">
												<h4 class="product-name"><a href="#">LONDON STAR SWEATSHIRT</a></h4>
												<span class="price">1x£375.00</span>
												<a class="remove-item" href="#"><i class="fa fa-close"></i></a>
											</div>
										</li>
										<li>
											<div class="thumb">
												<img src="{{ asset('style/images/products/1.png') }}" alt="">
											</div>
											<div class="info">
												<h4 class="product-name"><a href="#">LONDON STAR SWEATSHIRT</a></h4>
												<span class="price">1x£375.00</span>
												<a class="remove-item" href="#"><i class="fa fa-close"></i></a>
											</div>
										</li>
									</ul>
									<div class="sub-total">
										Subtotal:£255.00
									</div>
									<div class="group-button">
										<a href="#" class="button">Shopping Cart</a>
										<a href="#" class="check-out button">CheckOut</a>
									</div>
								</div>
							</div>
							<div class="box-settings">
								<span class="icon pe-7s-config"></span>
								<div class="settings-wrapper ">
									<div class="setting-content"> 

										@if ( Auth::check() )
										<div class="setting-option">
											<ul>
												<p>Xin chào {{ Auth::user()->name }}</p>
												<li><a href="{{ route('client.shops.userInfo') }}"><i class="icon-user icons"></i><span>Hồ sơ</span></a></li>
													@if (Auth::user()->role == '1' )
													<li><a href="{{ route('admin.products.listProduct') }}"><i class="icon-user icons"></i><span>Trang quản trị</span></a></li>
													@endif
												<li><a href="{{ route('logout') }}"><i class="icon-user icons"></i><span>Đăng xuất</span></a></li>
											</ul>
										</div>
											
										@else
											<div class="setting-option">
												<ul>
													<li><a href="{{route('register')}}"><i class="icon-lock-open icons"></i><span>Đăng ký </span></a></li>
													<li><a href="{{route('login')}}"><i class="icon-lock-open icons"></i><span>Đăng nhập</span></a></li>
												</ul>
											</div>
										@endif
									</div>
								</div>
							</div>
						</div>
						<ul class="boutique-nav main-menu clone-main-menu">
							<li class="menu-item-has-children item-megamenu">
								<a href="{{ route('client.shops.home') }}">HOME</a>
							</li>
							<li class="menu-item-has-children item-megamenu">
								<a href="{{ route('client.shops.listProduct') }}">SHOP</a>
							</li>
							<li class="menu-item-has-children item-megamenu">
								<a href="{{ route('client.shops.lienHe') }}">LIÊN HỆ</a>
							</li>
							<li class="menu-item-has-children">
								<a href="{{ route('client.shops.about') }}">ABOUT</a>
							</li>
						</ul>
						<span class="mobile-navigation"><i class="fa fa-bars"></i></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

