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
            <form action="{{route('danhmuc.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputAddress">Tên Danh Mục</label>
                    <input type="text" class="form-control" id="inputAddress" name='tendanhmuc' value="{{old('tendanhmuc')}}" placeholder="Tên danh mục">
                    <p style="color: red;">{{ $errors->first('tendanhmuc') }}</p>
                </div>

                <button type="submit" class="btn btn-primary">Thêm Mới</button>
            </form>
        </div>
        @if (session('success'))
        <div class="alert alert-info">{{session('success')}}</div>
        @endif
    </main>
</div>
@endsection('content')