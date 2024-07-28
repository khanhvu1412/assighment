<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.kutethemes.com/boutique/html/index9.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 04:33:46 GMT -->
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Boutique - eCommerce</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400italic,400,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,100,100italic,300italic,400,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<style>

	</style>
</head>
<body class="home">
<div id="box-mobile-menu" class="box-mobile-menu full-height full-width">
	<div class="box-inner">
		<span class="close-menu"><span class="icon pe-7s-close"></span></span>
	</div>
</div>
<!-- Header -->
@include('client.layouts.header')
<!-- End header -->

<!-- Main -->

<div class="margin-top-40">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4">
                <div class="element-icon style2">
					<div class="icon"><i class="flaticon flaticon-origami28"></i></div>
					<div class="content">
						<h4 class="title">FREE SHIPPING WORLD WIDE</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
                <div class="element-icon style2">
					<div class="icon"><i class="flaticon flaticon-curvearrows9"></i></div>
					<div class="content">
						<h4 class="title">MONEY BACK GUARANTEE</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
                <div class="element-icon style2">
					<div class="icon"><i class="flaticon flaticon-headphones54"></i></div>
					<div class="content">
						<h4 class="title">ONLINE SUPPORT 24/7</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- <div class="container">
	<div class="margin-top-30">
		<div class="box-product-featured">
			<div class="box-head banner-opacity">
				<img src="{{ asset('style/images/b/19.jpg') }}" alt="">
				<div class="inner">
					<h2 class="box-title">FEATURED ITEMS</h2>
					<span class="box-sub-title">Our Featured today!</span>
					<a href="#" class="box-link">SHOP MORE ITEMS</a>
				</div>
			</div>
			<div class="box-content">
				<div class="box-content-inner">
					<ul class="box-product-list owl-carousel nav-style2 nav-center-outside" data-nav="true" data-dots="false" data-margin="30" data-loop="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/18.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/19.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/19.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/20.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/20.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/21.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="margin-top-50">
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<div class="section-title text-center margin-top-40 margin-bottom-30">
					<h3>OUR CATEGORIES</h3>
					<span class="sub-title">Find all items you want by select our featured categories</span>
				</div>
			</div>
			<div class="col-sm-12 col-md-7">
				<ul class="category-menu category-carousel pull-left owl-carousel nav-style7 nav-center-center" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":4},"1000":{"items":4}}'>
					<li>
						<a href="#">
						<img src="{{ asset('style/images/categorys/1.png') }}" alt="">
						Clothing
						</a>
					</li>
					<li>
						<a href="#">
						<img src="{{ asset('style/images/categorys/2.png') }}" alt="">
						Sneakers
						</a>
					</li>
					<li>
						<a href="#">
						<img src="{{ asset('style/images/categorys/3.png') }}" alt="">
						Accessories
						</a>
					</li>
					<li>
						<a href="#">
						<img src="{{ asset('style/images/categorys/4.png') }}" alt="">
						Handbags
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="margin-top-50">
		<div class="box-product-featured right">
			<div class="box-head banner-opacity">
				<img src="{{ asset('style/images/b/20.jpg') }}" alt="">
				<div class="inner">
					<h2 class="box-title">FEATURED ITEMS</h2>
					<span class="box-sub-title">Our Featured today!</span>
					<a href="#" class="box-link">SHOP MORE ITEMS</a>
				</div>
			</div>
			<div class="box-content">
				<div class="box-content-inner">
					<ul class="box-product-list owl-carousel owl-carousel nav-style2 nav-center-outside" data-nav="true" data-dots="false" data-margin="30" data-loop="true"  data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/21.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/22.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/22.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/23.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/23.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/24.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section-brand-slide">
		<div class="brands-slide owl-carousel nav-center-center nav-style7" data-nav="true" data-dots="false" data-loop="true" data-margin="60" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
			<a href="#"><img src="{{ asset('style/images/brands/brand1.png') }}" alt=""></a>
			<a href="#"><img src="{{ asset('style/images/brands/brand2.png') }}" alt=""></a>
			<a href="#"><img src="{{ asset('style/images/brands/brand3.png') }}" alt=""></a>
			<a href="#"><img src="{{ asset('style/images/brands/brand4.png') }}" alt=""></a>
			<a href="#"><img src="{{ asset('style/images/brands/brand5.png') }}" alt=""></a>
		</div>
	</div>
	<div class="margin-top-60">
		<div class="box-product-featured">
			<div class="box-head banner-opacity">
				<img src="{{ asset('style/images/b/21.jpg') }}" alt="">
				<div class="inner">
					<h2 class="box-title">FEATURED ITEMS</h2>
					<span class="box-sub-title">Our Featured today!</span>
					<a href="#" class="box-link">SHOP MORE ITEMS</a>
				</div>
			</div>
			<div class="box-content">
				<div class="box-content-inner">
					<ul class="box-product-list owl-carousel nav-style2 nav-center-outside" data-nav="true" data-dots="false" data-margin="30" data-loop="true"  data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/24.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/25.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/25.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/26.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/26.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/27.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="margin-top-60 section-lasttest-blog">
		<div class="section-title text-center"><h3>Our BLog</h3></div>
		<div class="lastest-blog owl-carousel nav-center-center nav-style7" data-nav="true" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":2}}'>
			<div class="item-blog">
				<div class="left">
					<div class="blog-date">
						<span class="day">7</span>
						<span class="month">/SEP</span><br>
						<span class="year">2015</span>
					</div>
					<h3 class="blog-title"><a href="#">We're the best Designers from UK</a></h3>
					<div class="meta">
						<span class="author">John Doe</span>
						<span class="comment"><i class="fa fa-comment"></i> 36 comments</span>
					</div>
				</div>
				<div class="right">
					<a class="banner-border" href="#"><img src="{{ asset('style/images/blogs/1.jpg') }}" alt=""></a>
				</div>
			</div>
			<div class="item-blog">
				<div class="left">
					<div class="blog-date">
						<span class="day">7</span>
						<span class="month">/SEP</span><br>
						<span class="year">2015</span>
					</div>
					<h3 class="blog-title"><a href="#">We're the best Designers from UK</a></h3>
					<div class="meta">
						<span class="author">John Doe</span>
						<span class="comment"><i class="fa fa-comment"></i> 36 comments</span>
					</div>
				</div>
				<div class="right">
					<a class="banner-border" href="#"><img src="{{ asset('style/images/blogs/2.jpg') }}" alt=""></a>
				</div>
			</div>
			<div class="item-blog">
				<div class="left">
					<div class="blog-date">
						<span class="day">7</span>
						<span class="month">/SEP</span><br>
						<span class="year">2015</span>
					</div>
					<h3 class="blog-title"><a href="#">We're the best Designers from UK</a></h3>
					<div class="meta">
						<span class="author">John Doe</span>
						<span class="comment"><i class="fa fa-comment"></i> 36 comments</span>
					</div>
				</div>
				<div class="right">
					<a class="banner-border" href="#"><img src="{{ asset('style/images/blogs/1.jpg') }}" alt=""></a>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="text-border margin-bottom-60">
		<p>FREE UK DELIVERY + RETURN OVER £85.00 (EXCLUDING HOMEWARE)| FREE UK COLLECT FROM STORE</p>
	</div> -->
</div> --}}

<div class="container">
	<div class="margin-top-30">
		<div class="box-product-featured">
			<div class="box-head banner-opacity">
				<img src="{{ asset('style/images/b/19.jpg') }}" alt="">
				<div class="inner">
					<h2 class="box-title">FEATURED ITEMS</h2>
					<span class="box-sub-title">Our Featured today!</span>
					<a href="#" class="box-link">SHOP MORE ITEMS</a>
				</div>
			</div>
			<div class="box-content">
				<div class="box-content-inner">
					<ul class="box-product-list owl-carousel nav-style2 nav-center-outside" data-nav="true" data-dots="false" data-margin="30" data-loop="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/18.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/19.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/19.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/20.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/20.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/21.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="margin-top-50">
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<div class="section-title text-center margin-top-40 margin-bottom-30">
					<h3>DANH MỤC SẢN PHẨM</h3>
				</div>
			</div>
			<div class="col-sm-12 col-md-7">
				<ul class="category-menu category-carousel pull-left owl-carousel nav-style7 nav-center-center "
					data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30"
					data-responsive='{"0":{"items":1},"600":{"items":4},"1000":{"items":4}}'>
						<li>
							<a href="">
								Quần áo
							</a>
						</li>
						<li>
							<a href="">
								Giày
							</a>
						</li>
						<li>
							<a href="">
								Túi
							</a>
						</li>
				</ul>
			</div>
		</div>
	</div>


	<div class="margin-top-50">
		<div class="box-product-featured right">
			<div class="box-head banner-opacity">
				<img src="{{ asset('style/images/b/20.jpg') }}" alt="">
				<div class="inner">
					<h2 class="box-title">FEATURED ITEMS</h2>
					<span class="box-sub-title">Our Featured today!</span>
					<a href="#" class="box-link">SHOP MORE ITEMS</a>
				</div>
			</div>
			<div class="box-content">
				<div class="box-content-inner">
					<ul class="box-product-list owl-carousel owl-carousel nav-style2 nav-center-outside" data-nav="true" data-dots="false" data-margin="30" data-loop="true"  data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/21.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/22.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/22.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/23.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/23.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/24.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="section-brand-slide">
		<div class="brands-slide owl-carousel nav-center-center nav-style7" data-nav="true" data-dots="false"
			data-loop="true" data-margin="60" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
			<a href="#"><img src="{{ asset('style/images/brands/brand1.png') }}" alt=""></a>
			<a href="#"><img src="{{ asset('style/images/brands/brand2.png') }}" alt=""></a>
			<a href="#"><img src="{{ asset('style/images/brands/brand3.png') }}" alt=""></a>
			<a href="#"><img src="{{ asset('style/images/brands/brand4.png') }}" alt=""></a>
			<a href="#"><img src="{{ asset('style/images/brands/brand5.png') }}" alt=""></a>
		</div>
	</div> 

	<div class="margin-top-30">
		<div class="box-product-featured">
			<div class="box-head banner-opacity">
				<img src="{{ asset('style/images/b/19.jpg') }}" alt="">
				<div class="inner">
					<h2 class="box-title">FEATURED ITEMS</h2>
					<span class="box-sub-title">Our Featured today!</span>
					<a href="#" class="box-link">SHOP MORE ITEMS</a>
				</div>
			</div>
			<div class="box-content">
				<div class="box-content-inner">
					<ul class="box-product-list owl-carousel nav-style2 nav-center-outside" data-nav="true" data-dots="false" data-margin="30" data-loop="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/18.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/19.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/19.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/20.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
						<li class="product-item style2">
							<div class="product-inner">
								<div class="product-thumb has-back-image">
									<a href="#"><img src="{{ asset('style/images/products/20.jpg') }}" alt=""></a>
									<a class="back-image" href="#"><img src="{{ asset('style/images/products/21.jpg') }}" alt=""></a>
									<div class="gorup-button">
										<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
										<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
										<a href="#" class="quick-view"><i class="fa fa-search"></i></a>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
									<span class="price">
										<ins>£85.00</ins>
										<del>£95.00</del>
									</span>
									<a href="#" class="button add_to_cart_button">ADD TO CART</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
	<div class="text-border margin-top-60 margin-bottom-60">
		<p>GIAO HÀNG TRÊN TOÀN QUỐC - MIỄN PHÍ SHIP TRÊN 100</p>
	</div>
</div>

<!-- End Main -->

    <!-- Footer -->
        @include('client.layouts.footer')
    <!-- End footer -->
	<a href="#" class="scroll_top" title="Scroll to Top" style="display: block;">
        <i class="fa fa-arrow-up"></i>
    </a>
	<script type="text/javascript" src="{{ asset('style/js/jquery-2.1.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('style/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('style/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/chosen.jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/Modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/lightbox.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('style/js/masonry.pkgd.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('style/js/imagesloaded.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/isotope.pkgd.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('style/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('style/js/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('style/js/masonry.js') }}"></script>
	<script type="text/javascript" src="{{ asset('style/js/functions.js') }}"></script>
</body>

<!-- Mirrored from html.kutethemes.com/boutique/html/index9.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 04:33:49 GMT -->
</html>
<!--  End Footer -->
