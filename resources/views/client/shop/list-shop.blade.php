@extends('client.layouts.index')

@push('styles')
    <style>
        .img-product{
           /* height: 400px; */
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    <div class="main-container no-slidebar">
        <div class="container">
            <div class="row">
                <div class="main-content col-sm-12">
                    <div class="shop-top">
                        <div class="shop-top-left">
                            <div class="breadcrumbs">
                                <a href="{{ route('client.shops.home') }}">Home</a>
                                <span>Shop</span>
                            </div>
                        </div>
                    </div>
                    <ul class="product-list-grid desktop-columns-4 tablet-columns-3 mobile-columns-1 row flex-flow">
                        @foreach ($listProduct as $key => $value)
                            <li class="product-item col-xs-12 col-sm-4 col-md-3">
                                <div class="product-inner">
                                    <div class="product-thumb has-back-image">
                                        <a href="#"><img src="{{ asset($value->image) }}" class="img-product" alt=""></a>
                                        {{-- <a class="back-image" href="#"><img src="{{ asset($value->image) }}" alt=""></a> --}}
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
                                        <a href="#" class="button">ADD TO CART</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    
@endpush