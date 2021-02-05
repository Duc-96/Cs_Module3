@extends('layouts.admin')
@section('content')

<div id="layoutSidenav_content">

    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Danh Mục Sản Phẩm</h1>
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
                            <form method="GET" id="header-search" action="{{route('danhmuc.index')}}">
                                @csrf
                                <input type="text" name="timkiem" value="{{ @$_GET['timkiem']}}" class="form-control m-input" placeholder="Nhập tên danh mục" />
                                <button type="submit">Tìm Kiếm</button>
                            </form>
                        </div>
                        <div id="search-suggest" class="s-suggest"></div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên Danh Mục</th>
                                <th scope="col">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <button><a href="{{route('danhmuc.create')}}">Thêm Mới</a></button>
                            <?php foreach ($danhMuc as $key => $value) : ?>
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->tendanhmuc}}</td>
                                    <div>
                                        <td>
                                            <div>
                                                <a href="{{route('danhmuc.edit',$value->id)}}">Cập Nhật</a>
                                            </div>
                                            <div>
                                                <form action="{{route('danhmuc.destroy',$value->id)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn-danger">Xóa</button>
                                                </form>
                                            </div>
                                        </td>
                                    </div>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-pagination text-center">
                                <nav aria-label="Page navigation example">
                                    {{$danhMuc->onEachSide(2)->links()}}
                                </nav>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</div>
@endsection('content')