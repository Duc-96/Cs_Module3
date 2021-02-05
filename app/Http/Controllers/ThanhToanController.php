<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\DanhMucSanPham;
use App\Http\Models\KhachHang;
use App\Http\Models\SanPham;
use App\Http\Models\DonHang;
use App\Http\Models\HoaDon;


class ThanhToanController extends Controller
{
    public function thanhToan()
    {
        $cart = session('cart');
        if ($cart) {
            foreach ($cart as $key => $value) {
                $idSanPham = $value['id'];
                $cart[$key]['thongtinsp'] = SanPham::find($idSanPham);

            }
        }
        return view('frontend.sanpham.thanhtoan', compact('cart'));
    }
    public function datHang(Request $request)
    {
        $kiemTraThongTin = [
            'tenkhachhang' => 'required',
            'diachi'     => 'required',
            'thanhpho'     => 'required',
            'sodienthoai' => 'required|numeric',
            'email'       => 'required|email',
        ];
        $messages = [
            'tenkhachhang.required' => 'Vui lòng nhập họ tên',
            'diachi.required'=>'Vui lòng nhập địa chỉ giao hàng',
            'thanhpho.required'=>'Vui lòng nhập tên thành phố',
            'sodienthoai.required'=>'Số điện thoại không được trống',
            'email.email'=>'Email không hợp lệ',
            'email.required'=>'Vui lòng nhập Email',

        ];
      
        $request->validate($kiemTraThongTin, $messages);
        $objDonHang = new DonHang();
        $objDonHang->tenkhachhang = $request->tenkhachhang;
        $objDonHang->sodienthoai = $request->sodienthoai;
        $objDonHang->diachi = $request->diachi;
        $objDonHang->thanhpho = $request->thanhpho;    
        $objDonHang->email = $request->email;
        $objDonHang->ngaydathang = date("Y-m-d H:i:s");
        $objDonHang->tongtien = session('tong');
        $objDonHang->ghichu = $request->ghichu;
        $objDonHang->save();
        if ($objDonHang->id) {
            $cart = session('cart');
            foreach ($cart as $key => $value) {
                $objHoaDon = new HoaDon();
                $objHoaDon->id_donhang = $objDonHang->id;
                $objHoaDon->id_sanpham = $value['id'];
                $objHoaDon->soluongsanpham = $value['sl'];
                $objHoaDon->save();
            }
        }
        return redirect()->route('thanhtoanthanhcong');
        
    }
}
