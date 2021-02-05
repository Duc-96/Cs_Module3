@extends('layouts.frontend')
@section('banner')
<div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
    <div class="hero__text">
        <span>Trái cây tươi ngon</span>
        <h2>Thực phẩm <br />100% Hữu cơ</h2>
        <p>Giao hàng nội thành miễn phí</p>
        <a href="/san-pham/danh-sach-san-pham" class="primary-btn">Mua ngay</a>
    </div>
</div>
@endsection
@section('content')
<!-- Categories Section Begin -->

<!-- Categories Section End -->
<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>{{__('language.Sản Phẩm Mới Nhất')}}</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach($sanPhamMoi as $key=>$value)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{$value->hinhanh}}">
                        <ul class="featured__item__pic__hover">

                            <li><a href="{{route('chitiet', $value->slug)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                            <li><a href="{{route('giohang.them',['id' => $value->id])}}"><i class="fa fa-cart-plus"></i></a></li>

                        </ul>

                    </div>
                    <div class="featured__item__text">
                        <h4> {{$value->tensanpham}}</a></h4>
                        <h5>{{number_format($value->giaban)}} VND</h5>
                        <button type="button" class="btn btn-warning"> <a href="{{route('chitiet', $value->slug)}}" style="color: white;"> Mua Ngay</a></button>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Featured Section End -->
<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Blog Section Begin -->

<!-- Blog Section End -->
@endsection