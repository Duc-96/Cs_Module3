@extends('layouts.cuahang')
@section('content')
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_phone"></span>
                    <h4>Số điện thoại</h4>
                    <p>012345678</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_pin_alt"></span>
                    <h4>Địa chỉ</h4>
                    <p>Lý Thường Kiệt-Đông Hà-Quảng Trị</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_clock_alt"></span>
                    <h4>Giờ mở cửa</h4>
                    <p>08:00 Sáng - 22:00 Tối</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_mail_alt"></span>
                    <h4>Email</h4>
                    <p>thucphamsach@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Begin -->
<div class="map">
    <iframe src="https://www.google.com/maps/place/Hue+university-+Quang+Tri+Branch/@16.8019538,107.1081312,19z/data=!3m1!4b1!4m5!3m4!1s0x3140e58473686455:0x595f5524fec039f6!8m2!3d16.8019538!4d107.1086784" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="map-inside">
        <i class="icon_pin"></i>
        <div class="inside-widget">
            <h4>Quảng Trị</h4>
            <ul>
                <li>Số điện thoại: 0123456789</li>
                <li>Địa chỉ: Lý Thường Kiệt-Đông Hà-Quảng Trị</li>
            </ul>
        </div>
    </div>
</div>

@endsection