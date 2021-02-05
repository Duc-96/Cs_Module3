@extends('layouts.thanhtoan')
@section('content')
<div style="text-align: center;">
    <h3> Đặt hàng thành công</h3>
    <p>Cảm ơn quý khách đã đặt hàng tại: thucphamsach.vn</p>
    <p>Đơn hàng sẽ được giao trong vòng 2h</p>
    <a href="{{route('danh-sach-san-pham')}}" class="btn btn-secondary"><i class="fa fa-arrow-left fa-lg" style="color:white ;" aria-hidden="true"> Tiếp tục mua sắm</i> </a>

</div>
@endsection('content')