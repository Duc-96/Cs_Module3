<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\DanhMucSanPham;
use App\Http\Models\KhachHang;
use App\Http\Models\SanPham;
use App\Http\Models\DonHang;

class SanPhamController extends Controller
{
    public function sanPham(Request $request)
    {
        $tuNhapVao = $request->timkiem;
        if($tuNhapVao){
            $phanTrang = SanPham::where('tensanpham', 'REGEXP', $tuNhapVao)->paginate(5);
            $sanPhamMoi = SanPham::Orderby('id','DESC')->Limit(3)->get();
            $soLuongSP = count($phanTrang);
        }else{
            $phanTrang = SanPham::paginate(5);
            $sanPhamMoi = SanPham::Orderby('id','DESC')->Limit(3)->get();
            $soLuongSP = 0;
        }      
        return view('frontend.sanpham.danhsach', compact('phanTrang','sanPhamMoi','soLuongSP'));
    }
    public function sanPhamTheoDanhMuc($slug)
    {
        $danhMuc = DanhMucSanPham::where('slug', $slug)->first();
        $idDanhMuc = $danhMuc->id;
        $sanPhamTheoDanhMuc = SanPham::where('id_danhmuc', '=', $idDanhMuc)->paginate(5);
        // echo '<pre>';
        // print_r($sanPhamTheoDanhMuc);
        // die();
        return view('frontend.sanpham.sanphamtheodanhmuc', compact('sanPhamTheoDanhMuc'));
    }
    public function chiTietSanPham($slug)
    {
        $chiTietSanPham = SanPham::where('slug', $slug)->first();

        return view('frontend.sanpham.chitietsanpham', compact('chiTietSanPham'));
    }
}
