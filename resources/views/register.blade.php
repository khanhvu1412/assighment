<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng kí</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('stylecss/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('stylecss/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        .image{
            width: 475px;
            height: 650px;
            object-fit: cover;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container ">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                        <img src="{{ asset('stylecss/img/sontung.jpg') }}" class="image" alt="Image">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Đăng ký!</h1>
                            </div>
                            @if (session('message'))
                                <h6 class="alert alert-danger">{{ session('message') }}</h6>
                            @endif
                            <form class="user" action="{{ route('postRegister') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="name" id="name" 
                                        placeholder="Name ...">
                                </div>
                                <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email" id="email"
                                        placeholder="Email ...">
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control form-control-file" name="image" id="image">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="phone" id="phone"
                                    placeholder="Phone ...">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="address" id="address"
                                    placeholder="Address ...">
                                </div>
                                <div class="form-group ">
                                        <input type="password" class="form-control form-control-user" name="password" id="password" 
                                        placeholder="Password ...">
                                </div>
                                <button class="btn btn-primary btn-user btn-block">Đăng ký</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Bạn đã có tài khoản? Đăng nhập ngay!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('stylecss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('stylecss/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('stylecss/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('stylecss/js/sb-admin-2.min.js') }}"></script>

</body>

</html>