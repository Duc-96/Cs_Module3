@extends('layouts.admin')
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Khách Hàng</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên Đăng Nhập</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Địa chỉ </th>
                                <th scope="col">Email</th>
                                <th scope="col">Thao tác</th>

                            </tr>
                        </thead>
                        <tbody>
                            <a href="{{route('khachhang.create')}}">Thêm Mới</a>
                            <?php foreach ($khachHang as $key => $value) : ?>
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->tendangnhap}}</td>
                                    <td>{{$value->hovaten}}</td>
                                    <td>{{$value->sodienthoai}}</td>
                                    <td>{{$value->diachi}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>
                                        <a href="/quanly/khachhang/cap-nhat">Cập Nhật</a>
                                        <a href="/quanly/khachhang/xoa">Xóa</a>

                                    </td>

                                </tr>
                            <?php endforeach ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="product-pagination text-center">
                                        <nav aria-label="Page navigation example">
                                            {{$khachHang->onEachSide(2)->links()}}
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
</div>
@endsection('content')