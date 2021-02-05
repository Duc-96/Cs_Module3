@extends('layouts.cuahang')
@section('content')

<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <div class="latest-product__text">
                            <h4>Sản Phẩm Mới Nhất</h4>
                            <div class="latest-product__slider owl-carousel">

                                <div class="latest-prdouct__slider__item">
                                    @foreach($sanPhamMoi as $key=>$value)
                                    <a href="{{route('chitiet', $value->slug)}}" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{asset('/')}}{{$value->hinhanh}}" width="110" height="110" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$value->tensanpham}}</h6>
                                            <span>{{number_format($value->giaban)}} VND</span>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>

                                <!-- <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{asset('img/latest-product/lp-1.jpg')}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{asset('img/latest-product/lp-2.jpg')}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{asset('img/latest-product/lp-3.jpg')}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">

                <div class="filter__item">
                    <div class="col-6">
                        <form class="navbar-form navbar-left" action="{{route('danh-sach-san-pham')}}" method="GET">
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ @$_GET['timkiem']}}" name='timkiem' placeholder="Nhập tên sản phẩm">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-5">

                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                @if($soLuongSP>0)
                                <h6><span>{{$soLuongSP}}</span> Sản phẩm được tìm thấy</h6>

                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($phanTrang as $key => $value) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('/')}}{{$value->hinhanh}}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="{{route('chitiet', $value->slug)}}"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a></li>
                                        <li><a href="{{route('giohang.them',['id' => $value->id])}}"><i class="fa fa-cart-plus fa-lg"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">{{$value->tensanpham}}</a></h6>
                                    <h5>{{number_format($value->giaban)}} VND</h5>
                                    <button type="button" class="btn btn-warning"> <a href="{{route('chitiet', $value->slug)}}" style="color: white;"> Mua Ngay</a></button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>


                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-pagination text-center">
                            <nav aria-label="Page navigation example">
                                {{$phanTrang->onEachSide(2)->links()}}
                            </nav>

                        </div>

                    </div>

                </div>
            </div>

        </div>

</section>
@endsection