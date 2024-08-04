@extends('client.layouts.index')

@push('styles')
    <style>
        .cach{
            padding-bottom: 50px;
        }
    </style>
@endpush
@section('content')
<div class="page-banner contact-banner">
    <div class="banner-content">
        <span class="subtitle">Chúng tôi ở đây để làm cho bạn cảm thấy hạnh phúc!</span>
        <h2 class="title">HÃY NÓI CHUYỆN!</h2>
    </div>
</div>
<div class="container ">
    <div class="cach row">
        <div class="col-sm-6">

            <div class="kt-contact-form margin-top-60">
                <div id="message-box-conact"></div>
                <h3 class="title">LIÊN HỆ VỚI CHÚNG TÔI CHO BẤT KỲ CÂU HỎI NÀO BẠN CÓ THỂ CÓ</h3>
                <p>
                    <input id="name" type="text" placeholder="Tên của bạn">
                </p>
                <p>
                    <input id="email" type="text" placeholder="Email">
                </p>
                <p>
                    <textarea id="content" placeholder="Tin nhắn"></textarea>
                </p>
                <button id='btn-send-contact' class="button">GỬI TIN NHẮN</button>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="margin-top-60">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6929943971347!2d105.84117131536679!3d21.028511985998498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7b7788e4b1%3A0x8a321b9c8a89e7b1!2zSOG6o2kgTm_TtiDhu4IgVHJp4buBbiDEkMOsbmcgVGjhu4sgVGnhu4FuIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1620299464018!5m2!1svi!2s" 
                    width="700" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
                <h6 class="margin-top-20">GỌI CHO CHÚNG TÔI</h6>
                <p class="roboto">Bạn muốn nói chuyện với một đại diện bán hàng? Hãy liên hệ với chúng tôi và chúng tôi rất sẵn lòng trả lời bất kỳ câu hỏi nào!</p>
                <p style="font-size: 18px; color: #222; font-weight: bold;"><i class="fa fa-phone"></i>(+84)123456789</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    
@endpush