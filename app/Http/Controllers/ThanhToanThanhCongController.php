<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\DanhMucSanPham;
use App\Http\Models\KhachHang;
use App\Http\Models\SanPham;
use App\Http\Models\DonHang;
use App\Http\Models\HoaDon;


class ThanhToanThanhCongController extends Controller
{
    public function thanhToanThanhCong(){
        return view('frontend.sanpham.thanhtoanthanhcong');
    }
}