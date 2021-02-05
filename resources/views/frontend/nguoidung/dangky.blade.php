@extends('layouts.frontend')
@section('banner')
<div>

    <form action="" method='Post'>
        @csrf

        <label for=tendangnhap>Tên đăng nhập</label>
        <input type="text" name='tendangnhap' value="{{old('tendangnhap')}}"> <br>
        <p style="color: red;">{{ $errors->first('tendangnhap') }}</p>
        Mật khẩu
        <input type="password" name='matkhau' value="{{old('matkhau')}}"> <br>
        <p style="color: red;">{{ $errors->first('matkhau') }}</p>
        Họ và tên<input type="text" name='hovaten' value="{{old('hovaten')}}"> <br>
        <p style="color: red;">{{ $errors->first('hovaten') }}</p>
        Số điện thoại<input type="number" name='sodienthoai' value="{{old('sodienthoai')}}"> <br>
        <p style="color: red;">{{ $errors->first('sodienthoai') }}</p>
        Địa chỉ<input type="text" name='diachi' value="{{old('diachi')}}"> <br>
        <p style="color: red;">{{ $errors->first('diachi') }}</p>
        Email<input type="email" name='email' value="{{old('email')}}"> <br>
        <p style="color: red;">{{ $errors->first('email') }}</p>
        Hình ảnh<input type="file" name='hinhanh'> <br>
        <input type="submit" value="Đăng Ký">

    </form>
</div>

@endsection