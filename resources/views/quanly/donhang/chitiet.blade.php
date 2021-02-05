@extends('layouts.admin')
@section('content')
<div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Đơn Hàng</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                      Chi tiết đơn hàng
                    </div>
                    <div class="card-body">
                    <table class="table table-striped">
    <thead>
<div>
<h3>Họ Tên: {{$thongTinKhachHang->tenkhachhang}}</h3>
<h3> Địa chỉ: {{$thongTinKhachHang->diachi}}</h3>
<h3>Thành Phố: {{$thongTinKhachHang->thanhpho}}</h3>
<h3>Email: {{$thongTinKhachHang->email}}</h3>
<h3>Tổng tiền: {{$thongTinKhachHang->tongtien}}</h3>
<h3>Ngày đặt hàng: {{$thongTinKhachHang->ngaydathang}}</h3>
<h3>Ghi chú: {{$thongTinKhachHang->ghichu}}</h3>


@foreach($chiTietDonHang as $key=>$value)
<h4>Sản Phẩm:{{$value->SanPham->tensanpham}}</h4>
<h4>số lượng: {{$value->soluongsanpham}}</h4>

@endforeach


</div>
@endsection