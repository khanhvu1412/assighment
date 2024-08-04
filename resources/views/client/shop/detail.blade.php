@extends('client.layouts.index')

@push('styles')
    <style>
        .img-product{
            height: 450px;
            width: 600px;
            object-fit: cover;
        }
        .meta{
            font-size: 17px;
        }
        .comment{
            margin-bottom: 50px
        }
    </style>
@endpush

@section('content')
    
<div class="container">
    <div class="breadcrumbs style2">
        <a href="{{ route('client.shops.home') }}">Home</a>
        <span>Chi tiết sản phẩm</span>
    </div>
    <div class="row">
        <div class="main-content col-sm-12">
            <div class="row">
                <form action="" class="cart-form" enctype="multipart/form-data" >
                    <div class="col-sm-4">
                        <div class="product-detail-image style2">
                            <div class="main-image-wapper">
                                <img class="img-product" src="{{ asset($product->image) }}" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="product-details-right style2">
                            <h3 class="product-name">
                                <p>{{$product->name}}</p>
                            </h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="price">
                                <ins>
                                    {{ $product->price }}
                                </ins>
                            </span>
                            <div class="meta"><span class="text-primary">
                                    <span>Còn {{ $product->quantity }} 
                                    </span>
                            </div>
                            <div class="short-descript">
                                <span>
                                    {{ $product->description }}
                                </span>
                            </div>

                            <a class="button button-add-cart" data-quantity="1" href="#">Mua</a>
                            <input type="submit" class="button button-add-cart" name="addtocart"
                                onclick="" value="Thêm vào giỏ hàng">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="comment">
        <div class="product-slide upsell-products">
            <div class="section-title text-center">
                <h3>SẢN PHẨM KHÁC</h3>
            </div>
            <ul class="owl-carousel" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'
                data-autoplay="true" data-loop="true" data-items="4" data-dots="false" data-nav="false"
                data-margin="30">
                @foreach ($otherProduct as $key => $value)
                    <form action="" method="post">
                        <li class="product-item">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a href="{{ route('client.shops.detailProduct', $value->id) }}"><img src="{{ asset($value->image) }}" alt=""></a>
                                </div>
                                <div class="product-info">

                                    <h3 class="product-name">
                                        <a href="#">
                                            <span name="tensp" value=""> {{ $value->name }}</span>
                                        </a>
                                    </h3>
                                    {{-- <span  name="soluong" value="1"> </span> --}}
                                    <span class="price">
                                        <ins style="color:red">
                                            <span  name="giasp" value=""> {{ $value->price }}</span>
                                        </ins>
                                    </span>
                                    <!-- <a href="#" class="button" name="addtocart"></a>Thêm vào giỏ hàng</a> -->
                                    <input type="submit" name="addtocart" onclick=""
                                        value="Thêm vào giỏ hàng">
                                </div>
                            </div>
                        </li>
                    </form>
                    @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    
@endpush