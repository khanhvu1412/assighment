@extends('client.layouts.index')

@push('styles')
    
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
                            <span>Sản phẩm của danh mục: {{ $category->name}}</span> 
                        </div>
                    </div>
                </div>
                <ul class="product-list-grid desktop-columns-4 tablet-columns-3 mobile-columns-1 row flex-flow">
                    @foreach ($product as $key => $value)
                        <li class="product-item col-xs-12 col-sm-4 col-md-3">
                            <div class="product-inner">
                                <div class="product-thumb has-back-image">
                                    <a href="{{ route('client.shops.detailProduct', $value->id) }}"><img src="{{ asset($value->image) }}" class="img-product" alt=""></a>
                                    
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