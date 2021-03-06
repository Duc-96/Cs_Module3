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
            <form action="{{route('sanpham.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputAddress">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="inputAddress" name='tensanpham' value="{{old('tensanpham')}}" placeholder="Tên sản phẩm">
                    <p style="color: red;">{{ $errors->first('tensanpham') }}</p>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Giá Nhập</label>
                        <input type="number" class="form-control" id="inputEmail4" name='gianhap' value="{{old('gianhap')}}" placeholder="Giá nhập">
                        <p style="color: red;">{{ $errors->first('gianhap') }}</p>

                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Giá Bán</label>
                        <input type="number" class="form-control" id="inputPassword4" name='giaban' value="{{old('giaban')}}" placeholder="giá bán">
                        <p style="color: red;">{{ $errors->first('giaban') }}</p>

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Ngày Nhập Hàng</label>
                        <input type="date" class="form-control" id="inputEmail4" name='ngaynhaphang' value="{{old('ngaynhaphang')}}" placeholder="Giá nhập">
                        <p style="color: red;">{{ $errors->first('ngaynhaphang') }}</p>

                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Hình ảnh</label>
                        <input type="file" class="form-control" id="inputPassword4" value="{{old('hinhanh')}}" name='hinhanh'>

                        <p style="color: red;">{{ $errors->first('hinhanh') }}</p>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Chi tiết sản phẩm</label>
                    <input type="text" class="form-control" id="inputAddress" name='chitiet' value="{{old('chitiet')}}" placeholder="chi tiết sản phẩm">
                    <p style="color: red;">{{ $errors->first('chitiet') }}</p>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Thuộc danh mục</label>
                        <select name="id_danhmuc" id="">
                        @foreach($danhMucSanPham as $key=>$value)
                            <option value="{{$value->id}}">{{$value->tendanhmuc}}</option>
                        @endforeach
                        </select>
                        
                        <p style="color: red;">{{ $errors->first('id_danhmuc') }}</p>

                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
        @if (session('success'))
        <div class="alert alert-info">{{session('success')}}</div>
        @endif
    </main>
</div>
@endsection('content')