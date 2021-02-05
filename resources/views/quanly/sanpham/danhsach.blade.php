@extends('layouts.admin')
@section('content')

<div id="layoutSidenav_content">

    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tables</h1>
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
                    <div class="form-group">
                        <div class="header-search">
                            <form method="GET" id="header-search" action="{{route('sanpham.index')}}">
                                <input type="text" name="timkiem" value="{{ @$_GET['timkiem']}}" class="form-control m-input" placeholder="Nhập tên sản phẩm" />
                                <button type="submit">Tìm Kiếm</button>
                            </form>
                        </div>
                        <div id="search-suggest" class="s-suggest"></div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá nhập</th>
                                <th scope="col">Giá bán</th>
                                <th scope="col">Ngày nhập hàng </th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Chi tiết</th>
                                <th scope="col">Thuộc danh mục</th>
                                <th scope="col">Thao tác</th>


                            </tr>
                        </thead>
                        <tbody>
                            <button><a href="{{route('sanpham.create')}}">Thêm Mới</a></button>
                            <?php foreach ($sanPham as $key => $value) : ?>
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->tensanpham}}</td>
                                    <td>{{$value->gianhap}}</td>
                                    <td>{{$value->giaban}}</td>
                                    <td>{{$value->ngaynhaphang}}</td>
                                    <td><img src="{{ asset($value->hinhanh)}}" alt="" width="50" height="50"></td>
                                    <td>{{$value->chitiet}}</td>
                                    <td>{{$value->DanhMucSanPham->tendanhmuc}}</td>
                                    <div>
                                        <td>
                                            <a href="{{route('sanpham.edit',$value->id)}}">Cập Nhật</a>
                                            <form action="{{route('sanpham.destroy',$value->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn-danger">Xóa</button>
                                            </form>

                                        </td>
                                    </div>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <a href="#"></a>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-pagination text-center">
                            <nav aria-label="Page navigation example">
                                {{$sanPham->onEachSide(2)->links()}}
                            </nav>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>
</div>
</div>
@endsection('content')