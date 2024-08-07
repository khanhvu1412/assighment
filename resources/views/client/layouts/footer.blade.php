<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row flex-flow">
                <div class="col-sm-12 col-md-4 footer-sidebar">
					<div class="widget contact-info">
						<span class="text-primary PlayfairDisplay">Nói chuyện với chúng tôi ngay bây giờ!</span>
						<h3 class="widget-title">Liên hệ chúng tôi</h3>
						<div class="content">
							<p class="address">501 Cửa hàng tại P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội, Việt
								Nam.</p>
							<p class="phone"><i class="fa fa-phone"></i> (+84) 5556 356</p>
						</div>
					</div>
				</div>
                <div class="col-sm-12 col-md-4 footer-sidebar">
					<div class="widget our-service">
						<span class="text-primary PlayfairDisplay">Nói chuyện với chúng tôi ngay bây giờ!</span>
						<h3 class="widget-title">THEO DÕI CHÚNG TÔI</h3>
						<div class="content">
							<ul>
								<li><a href="{{ route('client.shops.home') }}">Trang chủ</a></li>
								<li><a href="{{ route('client.shops.lienHe') }}">Liên hệ</a></li>
								<li><a href="{{ route('client.shops.about') }}">About</a></li>


							</ul>
						</div>
					</div>
				</div>
                <div class="col-sm-12 col-md-4 footer-sidebar">
                    <div class="widget widget_social">
                        <span class="text-primary PlayfairDisplay">Talk to Us Now !</span>
                        <h3 class="widget-title">FOLLOW US</h3>
                        <div class="content">
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="payment">
                <div class="head"><span>We Accept</span><span class="PlayfairDisplay">Online Payment Be Secured</span>
                </div>
                <div class="list">
                    <a href="#" class="item"><img src=" {{ asset('style/images/payments/1.png') }}" alt=""></a>
                    <a href="#" class="item"><img src=" {{ asset('style/images/payments/2.png') }}" alt=""></a>
                    <a href="#" class="item"><img src=" {{ asset('style/images/payments/3.png') }}" alt=""></a>
                    <a href="#" class="item"><img src=" {{ asset('style/images/payments/4.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</footer>