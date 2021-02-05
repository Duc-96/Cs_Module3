<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\DanhMucSanPham;
use Illuminate\Support\Facades\Hash;
use App\Http\Models\SanPham;
use App\Http\Models\DonHang;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Models\KhachHang;

class ThongTinKhachHangController extends Controller
{

    public function dangNhap(Request $request)
    {
        if ($request->method() == "POST") {
            $dangNhap = [
                'tendangnhap'=>$request->tendangnhap,
                'matkhau'=>$request->matkhau,
            ];
            
            $kiemTraThongTin = [
                'tendangnhap' => 'required',
                'matkhau'     => 'required',
            ];
            $messages = [
                'tendangnhap.required' => 'Vui lòng nhập tài khoản',
                'tendangnhap.exists' => 'sai tai khoan',
                'matkhau.required'=>'Vui lòng nhập mật khẩu',
            ];
            $request->validate($kiemTraThongTin, $messages);
            
        }
        return view('frontend.nguoidung.dangnhap');
    }

    public function dangKy(Request $request)
    {
        if ($request->method() == "POST") {
            $kiemTraThongTin = [
                'tendangnhap' => 'required|alpha|min:6|max:10',
                'matkhau'     => 'required|min:8',
                'hovaten'     => 'required|alpha',
                'sodienthoai' => 'required|numeric',
                'diachi'      => 'required',
                'email'       => 'required|email',
            ];
            $messages = [
                'tendangnhap.required' => 'Tên đăng nhập không được trống',
                'tendangnhap.min'=>'Độ dài tên đăng nhập không hợp lệ',
                'matkhau.required'=>'Mật khẩu không được trống',
                'matkhau.min'=>'Mật khẩu quá ngắn',
                'hovaten.required'=>'Tên không được trống',
                'hovaten.alpha'=>'Tên không được chứa số',
                'sodienthoai.required'=>'Số điện thoại không được trống',
                'diachi.required'=>'Địa chỉ không được trống',
                'email.email'=>'Email không hợp lệ',
                'email.required'=>'Email không được trống',
    
            ];
            $request->validate($kiemTraThongTin, $messages);

            $khachHang = new KhachHang();
            $khachHang->tendangnhap = $request->input('tendangnhap');
            $khachHang->matkhau = Hash::make($request->input('matkhau'));
            $khachHang->hovaten = $request->input('hovaten');
            $khachHang->sodienthoai = $request->input('sodienthoai');
            $khachHang->diachi = $request->input('diachi');
            $khachHang->email = $request->input('email');
            $khachHang->save();
            Session::flash('success', 'Tạo mới khách hàng thành công');
        }
        return view('frontend.nguoidung.dangky');
    }
}
