@extends('layouts.frontend')
@section('banner')
<div class="row">
    <?php foreach ($sanPhamTheoDanhMuc as $key => $value) : ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="{{asset('/'.$value->hinhanh)}}">
                    <ul class="product__item__pic__hover">
                        <li><a href="/san-pham/{{ $value->slug}}"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a></li>
                        <li><a href="{{route('giohang.them',['id' => $value->id])}}"><i class="fa fa-cart-plus fa-lg"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="#">{{$value->tensanpham}}</a></h6>
                    <h5>{{number_format( $value->giaban)}} VND</h5>
                    <button type="button" class="btn btn-warning"> <a href="{{route('chitiet', $value->slug)}}" style="color: white;"> Mua Ngay</a></button>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    <div class="row">
        <div class="col-md-12">
            <div class="product-pagination text-center">
                <nav aria-label="Page navigation example">
                    {{$sanPhamTheoDanhMuc->onEachSide(2)->links()}}
                </nav>

            </div>

        </div>

    </div>
    <div class="product__pagination">

    </div>
</div>
@endsection('banner')