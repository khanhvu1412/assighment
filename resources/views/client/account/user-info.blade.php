@extends('client.layouts.index')

@push('styles')
    <style>
        .content{
            margin-bottom: 50px;
        }
    </style>
@endpush

@section('content')
<div class="container">
    <div class="content">
        <div class="breadcrumbs style2">
            <a href="{{ route('client.shops.listProduct') }}">Home</a> Tài khoản
        </div>

        
        <div class="row">
            <div class="main-content col-sm-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="product-detail-image style2">

                            <div class="main-image-wapper">
                                <img class="main-image" src="{{ $user->image }}" alt="Không hiển thị ảnh">
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="product-details-right style2">
                            <h3 class="product-name">
                                Tên đăng nhập: {{ $user->name }}
                            </h3>
                            <br>
                            <h3 class="product-name">
                                Email: {{ $user->email }}
                            </h3>
                            <br>
                            <h3 class="product-name">
                                Số điện thoại: {{ $user->phone }}
                            </h3>
                            <br>
                            <span class="product-name">
                                Địa chỉ: {{ $user->address }}
                            </span>
                            <br>
                            <a href="{{ route('client.shops.updateInfo') }}"><input type="submit" style="margin-top:50px"
                                    class="button button-add-cart" value="Cập nhật tài khoản"></a>
                            <a href="{{ route('client.shops.changePassword') }}"><input type="submit" style="margin-top:50px; margin-left: 10px;"
                                    class="button button-add-cart" value="Đổi mật khẩu"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    
@endpush