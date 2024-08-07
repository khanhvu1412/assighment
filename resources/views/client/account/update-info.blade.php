@extends('client.layouts.index')

@push('styles')
    
@endpush

@section('content')

{{-- <div class="container">
    <div class="content">
        <div class="breadcrumbs style2">
            <a href="{{ route('client.shops.listProduct') }}">Home</a> Tài khoản
        </div> --}}
        
        <div class="wrapper">
            <div class="login ">
                <h1 class="text-center">Cập nhật tài khoản</h1>
                
                <form action="{{ route('client.shops.updatePatchInfo') }}" method="post" class="form-login" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif  
                    <div class="form-input">
                        <p>Name</p>
                        <input type="text" class="form-control" name="nameUS" value="{{ $user->name }}">
                    </div>
                    <div class="form-input">
                        <p>Email</p>
                        <input type="text" class="form-control" name="emailUS" value="{{ $user->email }}">
                    </div>
                    <div class="form-input">
                        <p>Ảnh</p>
                        <input type="file" accept="image/*" class="form-control" name="imageUS" value="{{ $user->image }}">
                    </div>    
                    <div class="form-input">
                        <p>Số điện thoại</p>
                        <input type="text" name="phoneUS" value="{{ $user->phone }}">
                    </div>
                    <div class="form-input">
                        <p>Địa chỉ</p>
                        <input type="text" name="addressUS" value="{{ $user->address }}">
                    </div>
                    <div class="nut text-center w-75">
                        <div class="login-btn">
                            <input type="submit" name="capnhattk" value="Cập nhật" onclick="return confirmCapnhattk()">
                        </div>
                        <div class="forget-password">
                            <a href="{{ route('client.shops.userInfo') }}" >Về trang tài khoản</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>


{{-- 
    </div>
</div> --}}
@endsection

@push('scripts')
    
@endpush