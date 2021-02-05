@extends('layouts.frontend')
@section('banner')

<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="{{asset('/')}}{{$chiTietSanPham->hinhanh}}" alt="">
                    </div>
                    <div class="product__details__pic__slider owl-carousel">
                        <img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt="">
                        <img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt="">
                        <img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt="">
                        <img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{$chiTietSanPham->tensanpham}}</h3>

                    <div class="product__details__price">{{number_format($chiTietSanPham->giaban)}} VND</div>
                    <p>{{$chiTietSanPham->chitiet}}</p>
                    <div class="product__details__quantity">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                    </div>
                    <a href="{{route('giohang.them',['id' => $chiTietSanPham->id])}}" class="primary-btn"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i></a>

                    <ul>
                        <li><b>Tồn kho</b> <span>có sẵn</span></li>
                        <li><b>Thời gian vận chuyển</b> <span>Trong vòng 2h</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class="col-lg-12">
                <div>
                    <p>{{$chiTietSanPham->chitiet}}</p>
                </div>

            </div>
        </div>
</section>

@endsection('banner')