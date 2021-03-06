<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Models\DangNhap;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DangNhapController extends Controller
{
    public function viewDangNhap(){
        return view('quanly.trangchu-admin.dangnhap');
    }
    public function dangNhap(Request $request){
        
        $arr = [
            'tendangnhap' => $request->tendangnhap,
            'password' => $request->matkhau
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        //kiểm tra trường remember có được chọn hay không
        if (Auth::guard('admin')->attempt($arr)) {
            dd('đăng nhập thành công');
            //..code tùy chọn
            //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
        } else {

            dd('tài khoản và mật khẩu chưa chính xác');
            //...code tùy chọn
            //đăng nhập thất bại hiển thị đăng nhập thất bại
        }
    }
        
    
}