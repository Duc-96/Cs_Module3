@extends('layouts.thanhtoan')
@section('content')
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Thanh Toán</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Trang Chủ</a>
                        <span>thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                </h6>
            </div>
        </div>
        <div class="checkout__form">
            <h4>Thông tin đặt hàng</h4>
            <form action="{{route('dathang')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Họ và tên<span>*</span></p>
                                    <input type="text" name='tenkhachhang' value="{{old('tenkhachhang')}}" placeholder="Họ và tên">
                                    <p style="color: red;font-style:oblique">{{ $errors->first('tenkhachhang') }}</p>
                                </div>
                            </div>

                        </div>
                        <div class="checkout__input">
                            <p>Địa chỉ<span>*</span></p>
                            <input type="text" name='diachi' value="{{old('diachi')}}" placeholder='Địa chỉ'>
                            <p style="color: red;font-style:oblique">{{ $errors->first('diachi') }}</p>                     
                        </div>
                        <div class="checkout__input">
                            <p>Tỉnh/Thành Phố<span>*</span></p>
                            <input type="text" name='thanhpho'value="{{old('thanhpho')}}" placeholder="tỉnh/thành phố" class="checkout__input__add">
                            <p style="color: red;font-style:oblique">{{ $errors->first('thanhpho') }}</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Số điện thoại<span>*</span></p>
                                    <input type="number" name='sodienthoai'value="{{old('sodienthoai')}}" placeholder='Số điện thoại'>
                                    <p style="color: red;font-style:oblique">{{ $errors->first('sodienthoai') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name='email' value="{{old('email')}}"placeholder="email">
                                    <p style="color: red;font-style:oblique">{{ $errors->first('email') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Ghi chú</p>
                                    <textarea rows="5" cols="70" placeholder="Viết gì đó..." name="ghichu"></textarea>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Đơn Hàng</h4>
                            <div class="checkout__order__products">
                                Sản Phẩm

                                <span>Đơn Giá</span>
                            </div>
                            <ul>
                                <?php $total = 0; ?>

                                @foreach ($cart as $key => $value)
                                <?php
                                $total += ($value['sl'] * $value['thongtinsp']->giaban);
                                ?>
                                <li>{{$value['thongtinsp']->tensanpham}}
                                    <span>{{number_format($value['thongtinsp']->giaban * $value['sl'])}} VND</span>
                                </li>
                                <li>SL: {{$value['sl']}}</li>
                                @endforeach
                            </ul>
                            <div class="checkout__order__subtotal">Tạm tính <span>{{number_format($total)}}</span></div>
                            <div class="checkout__order__total">Tổng tiền <span>{{number_format($total)}}</span></div>


                            <button type="submit" class="site-btn">Đặt Hàng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection('content')