<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\DanhMucSanPham;
use App\Http\Models\KhachHang;
use App\Http\Models\SanPham;
use App\Http\Models\DonHang;

use Illuminate\Support\Facades\Session;

class TrangChuController extends Controller
{
    public function trangChu()
    {
        $sanPhamMoi = SanPham::Orderby('id','DESC')->Limit(4)->get();

      
        return view('frontend.trangchu.trangchu',compact('sanPhamMoi'));
    }
    public function gioiThieu()
    {
        return view('frontend.trangchu.gioithieu');
    }
    public function kienThuc()
    {
        return view('frontend.trangchu.kienthuc');
    }
    public function lienHe()
    {
        return view('frontend.trangchu.lienhe');
    }
}
