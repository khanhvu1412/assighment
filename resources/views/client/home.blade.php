@extends('client.layouts.index')

@push('styles')
    
@endpush

@section('content')

<!-- Start Imgslide -->
    <div class="home-slide9 owl-carousel nav-style2 nav-center-center" data-items="1" data-nav="true" data-dots="false"
    data-loop="true" data-autoplay="true">
        <div class="item-slide">
            <img src="{{ asset('style/images/slides/21.jpg') }}" alt="">
        </div>
        <div class="item-slide">
            <img src="{{ asset('style/images/slides/22.jpg') }}" alt="">
        </div>
        <div class="item-slide">
            <img src="{{ asset('style/images/slides/23.jpg') }}" alt="">
        </div>
    </div>
<!-- End Imgslide -->

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

<div class="container">
<div class="margin-top-30">
    <div class="box-product-featured">
        <div class="box-head banner-opacity">
            <img src="{{ asset('style/images/b/19.jpg') }}" alt="">
            <div class="inner">
                <h2 class="box-title">FEATURED ITEMS</h2>
                <span class="box-sub-title">Our Featured today!</span>
                <a href="{{ route('client.shops.listProduct') }}" class="box-link">SHOP MORE ITEMS</a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content-inner">
                <ul class="box-product-list owl-carousel nav-style2 nav-center-outside" data-nav="true" data-dots="false" data-margin="30" data-loop="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                    @foreach ($newPro as $value)
                    <li class="product-item style2">
                        <div class="product-inner">
                            <div class="product-thumb has-back-image">
                                <a href="{{ route('client.shops.detailProduct', $value->id) }}"><img src="{{ asset($value->image) }}" alt=""></a>
                                {{-- <a class="back-image" href="#"><img src="{{ asset('style/images/products/19.jpg') }}" alt=""></a> --}}
                                {{-- <div class="gorup-button">
                                    <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="compare"><i class="fa fa-exchange"></i></a>
                                    <a href="#" class="quick-view"><i class="fa fa-search"></i></a>
                                </div> --}}
                            </div>
                            <div class="product-info">
                                <h3 class="product-name"><a href="#">{{ $value->name }}</a></h3>
                                <span class="price">
                                    <ins>{{ $value->price }}</ins>
                                </span>
                                <a href="#" class="button add_to_cart_button">ADD TO CART</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
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
                        @foreach ($listCate as $key => $category)
                            <li>
                                <a href="{{ route('client.shops.searchCategory', $category->id) }}">
                                    {{$category->name}}
                                </a>
                            </li>
                        @endforeach
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
                <a href="{{ route('client.shops.listProduct') }}" class="box-link">SHOP MORE ITEMS</a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content-inner">
                <ul class="box-product-list owl-carousel owl-carousel nav-style2 nav-center-outside" data-nav="true" data-dots="false" data-margin="30" data-loop="true"  data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                    @foreach ($newPro2 as $value)
                    <li class="product-item style2">
                        <div class="product-inner">
                            <div class="product-thumb has-back-image">
                                <a href="{{ route('client.shops.detailProduct', $value->id) }}"><img src="{{ asset($value->image) }}" alt=""></a>
                                {{-- <a class="back-image" href="#"><img src="{{ asset('style/images/products/22.jpg') }}" alt=""></a> --}}
                                {{-- <div class="gorup-button">
                                    <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="compare"><i class="fa fa-exchange"></i></a>
                                    <a href="#" class="quick-view"><i class="fa fa-search"></i></a>
                                </div> --}}
                            </div>
                            <div class="product-info">
                                <h3 class="product-name"><a href="#">{{ $value->name }}</a></h3>
                                <span class="price">
                                    <ins>{{ $value->price }}</ins>
                                </span>
                                <a href="#" class="button add_to_cart_button">ADD TO CART</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
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
                <a href="{{ route('client.shops.listProduct') }}" class="box-link">SHOP MORE ITEMS</a>
            </div>
        </div>
        <div class="box-content">
            <div class="box-content-inner">
                <ul class="box-product-list owl-carousel nav-style2 nav-center-outside" data-nav="true" data-dots="false" data-margin="30" data-loop="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                    @foreach ($newPro3 as $value)
                    <li class="product-item style2">
                        <div class="product-inner">
                            <div class="product-thumb has-back-image">
                                <a href="{{ route('client.shops.detailProduct', $value->id) }}"><img src="{{ asset($value->image) }}" alt=""></a>
                                {{-- <div class="gorup-button">
                                    <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="compare"><i class="fa fa-exchange"></i></a>
                                    <a href="#" class="quick-view"><i class="fa fa-search"></i></a>
                                </div> --}}
                            </div>
                            <div class="product-info">
                                <h3 class="product-name"><a href="#">{{ $value->name }}</a></h3>
                                <span class="price">
                                    <ins>{{ $value->price }}</ins>
                                </span>
                                <a href="#" class="button add_to_cart_button">ADD TO CART</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>	
<div class="text-border margin-top-60 margin-bottom-60">
    <p>GIAO HÀNG TRÊN TOÀN QUỐC - MIỄN PHÍ SHIP TRÊN 100</p>
</div>
</div>
{{-- Endmain --}}
@endsection

@push('scripts')
    
@endpush