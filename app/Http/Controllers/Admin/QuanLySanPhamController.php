<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\SanPham;
use App\Http\Models\DanhMucSanPham;
use Illuminate\Support\Str;

use App\Eloquent\User;


class QuanLySanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tuNhapVao = $request->timkiem;
        if ($tuNhapVao) {
            $sanPham = SanPham::where('tensanpham', 'REGEXP', $tuNhapVao)->paginate(5);
        } else {
            $sanPham = SanPham::paginate(5);
        }

        return view('quanly.sanpham.danhsach', compact('sanPham'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $danhMucSanPham = DanhMucSanPham::all();
        return view('quanly.sanpham.themsanpham', compact('danhMucSanPham'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kiemTra = [
            'tensanpham' => 'required',
            'gianhap' => 'required|numeric',
            'giaban' => 'required|numeric',
            'ngaynhaphang' => 'required',
            'hinhanh' => 'required',
        ];
        $messages = [
            'tensanpham.required' => 'Vui lòng nhập tên sản phẩm',
            'gianhap.required' => 'Vui lòng nhập giá nhập hàng',
            'gianhap.numeric' => 'Giá nhập phải là số',
            'giaban.required' => 'Vui lòng nhập giá bán hàng',
            'giaban.numeric' => 'Giá bán phải là số',
            'ngaynhaphang.required' => 'Nhập ngày nhập hàng',
            'hinhanh.required' => 'Chưa upload hình ảnh',
        ];
        $request->validate($kiemTra, $messages);
        $sanPham = new SanPham();

        $sanPham->tensanpham = $request->input('tensanpham');
        $sanPham->gianhap = $request->input('gianhap');
        $sanPham->giaban = $request->input('giaban');
        $sanPham->ngaynhaphang = $request->input('ngaynhaphang');
        $sanPham->chitiet = $request->input('chitiet');
        $sanPham->id_danhmuc = $request->id_danhmuc;
        $sanPham->slug = Str::slug($request->input('tensanpham'), '-');
        if ($request->hinhanh) {
            $imgname = time() . '.' . $request->hinhanh->extension();
            // $file = $request->file('hinhanh')->store('uploadimages');
            $file = $request->hinhanh->move(public_path('uploadimages'), $imgname);
            $sanPham->hinhanh = 'uploadimages/' . $imgname;
        }
        $sanPham->save();
        $request->session()->flash('success', 'Thêm sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $danhMucSanPham = DanhMucSanPham::all();
        $sanPham = SanPham::find($id);
        return view('quanly.sanpham.suasanpham', compact('sanPham', 'danhMucSanPham'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $kiemTra = [
            'tensanpham' => 'required',
            'gianhap' => 'required|numeric',
            'giaban' => 'required|numeric',
            'ngaynhaphang' => 'required',
        ];
        $messages = [
            'tensanpham.required' => 'Vui lòng nhập tên sản phẩm',
            'gianhap.required' => 'Vui lòng nhập giá nhập hàng',
            'gianhap.numeric' => 'Giá nhập phải là số',
            'giaban.required' => 'Vui lòng nhập giá bán hàng',
            'giaban.numeric' => 'Giá bán phải là số',
            'ngaynhaphang.required' => 'Nhập ngày nhập hàng',
        ];
        $request->validate($kiemTra, $messages);
        $sanPham = SanPham::find($id);

        $sanPham->tensanpham = $request->input('tensanpham');
        $sanPham->gianhap = $request->input('gianhap');
        $sanPham->giaban = $request->input('giaban');
        $sanPham->ngaynhaphang = $request->input('ngaynhaphang');
        if ($request->hinhanh) {
            $imgname = time() . '.' . $request->hinhanh->extension();
            // $file = $request->file('hinhanh')->store('uploadimages');
            $file = $request->hinhanh->move(public_path('uploadimages'), $imgname);
            $sanPham->hinhanh = 'uploadimages/' . $imgname;
        }
        $sanPham->chitiet = $request->input('chitiet');
        $sanPham->id_danhmuc = $request->id_danhmuc;
        $sanPham->slug = Str::slug($request->input('tensanpham'));
        $sanPham->save();
        $request->session()->flash('success', 'Cập nhật sản phẩm thành công!');
        return redirect()->route('sanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $xoaSanPham = SanPham::where('id', $id)->delete();

        return redirect()->route('sanpham.index');
    }
}
