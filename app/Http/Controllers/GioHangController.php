<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\DanhMucSanPham;
use App\Http\Models\KhachHang;
use App\Http\Models\SanPham;
use App\Http\Models\DonHang;
use Illuminate\Support\Facades\Session;

class GioHangController extends Controller
{
    public function xemGioHang()
    {
        // session()->flush();
        $cart = session('cart');
        // dd($cart);
        $tong = 0;
        if ($cart) {
            foreach ($cart as $key => $value) {
                $idSanPham = $value['id'];
                $cart[$key]['thongtinsp'] = SanPham::find($idSanPham);
                $tong += $value['sl'] * $cart[$key]['thongtinsp']->giaban;
            }
        } else {
            $cart = [];
        }

        session(['tong' => $tong]);
        return view('frontend.trangchu.giohang', compact('cart'));
        // echo'<pre>';
        // print_r($soLuong);
        // die();

    }
    public function themGioHang($id)
    {

        $cart = session('cart');

        if (isset($cart[$id])) {
            $cart[$id]['sl'] += 1;
        } else {
            $cart[$id] = [
                'id' => $id,
                'sl' => 1,
            ];
        }

        session(['cart' => $cart]);
        return redirect()->back()->with('success', 'Thêm sản phẩm thành công!');
    }
    public function xoaSanPham($id)
    {
        $cart = session('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }
        session(['cart' => $cart]);
        return redirect()->route('giohang.xem');
    }
    public function xoaGioHang()
    {
        session()->forget('cart');
        return redirect()->route('giohang.xem');
    }

    public function capNhatGioHang(Request $request)
    {
        $cart = session('cart');
        foreach ($cart as $key => $value) {
            $idSanPham = $value['id'];
            $soluong =  $request->soluong[$idSanPham];
            $cart[$idSanPham]['sl']=$soluong;
        }
        session(['cart' => $cart]);
        return redirect()->route('giohang.xem');
    }
}
