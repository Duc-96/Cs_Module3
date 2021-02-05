@extends('layouts.frontend')
@section('banner')
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Giỏ Hàng Mua Sắm</h2>
                    <div class="breadcrumb__option">
                        <a href="#">Trang Chủ</a>
                        <span>giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="shoping-cart spad">
    <div class="container">
        <form action="{{route('giohang.capnhat')}}" method="POST">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">

                        @csrf
                        <table>
                            <thead>

                                <tr>
                                    <th class="shoping__product">Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($cart)
                                <?php $total = 0; ?>
                                <?php foreach ($cart as $key => $value) : ?>
                                    <?php $total += ($value['sl'] * $value['thongtinsp']->giaban); ?>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="{{$value['thongtinsp']->hinhanh}}" width="101" height="100" alt="">
                                            <h5>{{$value['thongtinsp']->tensanpham}}</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            {{number_format($value['thongtinsp']->giaban)}} VND
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input name="soluong[{{$key}}]" type="text" value="{{$value['sl']}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            <?php echo number_format($value['thongtinsp']->giaban * $value['sl']); ?> VND
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <a href="{{route('giohang.xoa',$value['thongtinsp']->id)}}"><span class="icon_close"></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        @if($cart)
                        <a href="{{route('danh-sach-san-pham')}}" class="btn btn-secondary"><i class="fa fa-arrow-left fa-lg" style="color:white ;" aria-hidden="true"> Tiếp tục mua sắm</i> </a>
                        <a class="btn btn-danger " href="{{route('xoagiohang')}}">Xóa Tất Cả Sản Phẩm</a>
                        <button type="submit" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>Cập nhật giỏ hàng</button>
                        @endif
                    </div>
                </div>
            </div>
        </form>
        @if($cart)
        <div class="row">

            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Mã giảm giá</h5>
                        <form action="#">
                            <input type="text" placeholder="nhập mã giảm giá">
                            <button type="submit" class="site-btn">Áp dụng</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Tổng đơn hàng</h5>
                    <ul>
                        <li>Tạm tính <span>{{number_format($total)}}</span></li>
                        <li>Tổng <span>{{number_format($total)}}</span></li>
                    </ul>
                    <a href="{{route('thanhtoan')}}" class="primary-btn">Tiến hành thanh toán</a>
                </div>
            </div>
        </div>
        @else
        <h6 style="text-align:center">không có sản phẩm nào</h6>
        <div>
            <a href="{{route('danh-sach-san-pham')}}" class="btn btn-secondary"><i class="fa fa-arrow-left fa-lg" style="color:white ;" aria-hidden="true"> Tiếp tục mua sắm</i> </a>
        </div>
        @endif
    </div>
</section>
@endsection