@extends('layouts.frontend')
@section('banner')
<div>
    <form action="" method="POST">
    @csrf
        Tên đăng nhập
        <input type="text" name="tendangnhap" id=""> <br>
        <p>{{ $errors->first('tendangnhap') }}</p>
        Mật khẩu
        <input type="password" name='matkhau'> <br>
        <input type="submit" value="Đăng Nhập">
        <a href="{{route('dang-ky')}}">Chưa có tài khoản?</a>
    </form>
</div>

@endsection