@extends('client.layouts.index')

@push('styles')
    
@endpush

@section('content')
<div class="wrapper">
    <div class="login">
        <h1>Đổi mật khẩu</h1>
        @if (session('message'))
        <div class="alert alert-danger" role="alert">
            {{ session('message') }}
        </div>
        @endif
        <form action="{{ route('client.shops.changePatchPassword') }}" method="post" class="form-changepassword">
            @csrf
            @method('patch')
            <div class="form-input">
                <p>Mật khẩu cũ</p>
                <div class="matkhau">
                    <input type="password" id="passwordInput1" name="matkhaucu" value="{{ $user->password }}">
                    <i class="far fa-eye" id="togglePassword1" onclick="togglePassword('passwordInput1')"></i>
                </div>

            </div>
            <div class="form-input">
                <p>Mật khẩu mới</p>
                <div class="matkhau">
                    <input type="password" id="passwordInput2" name="matkhaumoi">
                    <i class="far fa-eye" id="togglePassword2" onclick="togglePassword('passwordInput2')"></i>
                </div>
            </div>
            <div class="login-btn">

                <input type="submit" name="doimk" value="Cập nhật" onclick="return confirmDoimk()">
            </div>
            <div class="forget-password">
                <a href="{{ route('client.shops.userInfo') }}">Về trang tài khoản</a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script> --}}

<script>
    function togglePassword(inputId) {
        var x = document.getElementById(inputId);
        var iconId = 'togglePassword' + inputId.charAt(inputId.length - 1);

        if (x.type === "password") {
            x.type = "text";
            document.getElementById(iconId).classList.add("fa-eye-slash");
            document.getElementById(iconId).classList.remove("fa-eye");
        } else {
            x.type = "password";
            document.getElementById(iconId).classList.add("fa-eye");
            document.getElementById(iconId).classList.remove("fa-eye-slash");
        }
    }
</script>
@endpush