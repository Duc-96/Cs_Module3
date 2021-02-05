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
                    DataTable Example
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên Khách Hàng</th>
                                <th scope="col">Tỉnh/Thành Phố</th>
                                <th scope="col">Tổng Tiền</th>
                                <th scope="col">Chi Tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <a href="{{route('khachhang.create')}}">Thêm Mới</a>
                            <?php foreach ($danhsach as $key => $value) : ?>
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->tenkhachhang}}</td>
                                    <td>{{$value->thanhpho}}</td>
                                    <td>{{$value->tongtien}}</td>
                                    <td>
                                        <a href="{{route('donhang.show',$value->id)}}" class='btn btn-outline-info'>Xem</a>
                                        <!-- <a href="/quanly/khachhang/xoa">Xóa</a> -->

                                    </td>

                                </tr>
                            <?php endforeach ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="product-pagination text-center">
                                        <nav aria-label="Page navigation example">
                                            {{$danhsach->onEachSide(2)->links()}}
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