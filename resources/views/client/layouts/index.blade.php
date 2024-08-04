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
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/form.css') }}">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400italic,400,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,100,100italic,300italic,400,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    {{-- <link rel="stylesheet" type='text/css' href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet'> --}}
	<style>

	</style>
	@stack('styles')
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

{{-- Main --}}

	@yield('content')

<!-- End Main -->

    <!-- Footer -->
        @include('client.layouts.footer')
    <!-- End footer -->
	<a href="#" class="scroll_top" title="Scroll to Top" style="display: block;">
        <i class="fa fa-arrow-up"></i>
    </a>
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script> --}}
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
	@stack('scripts')
</body>

<!-- Mirrored from html.kutethemes.com/boutique/html/index9.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 04:33:49 GMT -->
</html>
<!--  End Footer -->
