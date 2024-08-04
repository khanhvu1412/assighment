@extends('client.layouts.index')

@push('styles')
    <style>
        .img-user{
            width: 450px;
            height: 450px;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    
<div class="page-banner about-banner">
    <div class="banner-content">
        <span class="subtitle">Chào mừng bạn đến với Boutique - Hãy cùng mua sắm với chúng tôi nhé!</span>
        <h2 class="title">BOUTIQUE</h2>
    </div>
</div>
<!-- About -->
<div class="section-about ">
    <div class="container">
        <div class="section-title text-center style7 margin-top-60">
            <span class="sub-title">Chào mừng đến với Boutique!</span>
            <h3>BOUTIQUE</h3>
        </div>

        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
            </div>
        </div>
        <div class="text-center GreatVibes">
            Assighment - PHP 3
        </div>
    </div>
</div>
<!-- About -->

<!-- Team -->
<div class="section-team margin-top-80">
    <div class="container">
        <div class="section-title text-center style7">
            <span class="sub-title">Đội ngũ tuyệt vời của chúng tôi!</span>
            <h3>GẶP ĐỘI CỦA CHÚNG TÔI</h3>
        </div>
        <div class="teams  text-center nav-style7" data-loop="true" data-nav="true" data-dots="false"
            data-margin="30" >
            <div class="team">
                <div class="avatar">
                    <img src="{{ asset('style/images/anhdaidien.jpg') }}" class="img-user"  alt="">
                </div>
                <div class="info">
                    <h3 class="name">Đỗ Khánh Vũ</h3>
                    <span class="position">Sinh viên lập trình Web</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./Team -->

@endsection


@push('scripts')
    
@endpush

