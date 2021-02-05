<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\DanhMucSanPham;
use Illuminate\Support\Str;


class QuanLyDanhMucController extends Controller
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
            $danhMuc = DanhMucSanPham::where('tendanhmuc', 'REGEXP', $tuNhapVao)->paginate(5);
        } else {
            $danhMuc = DanhMucSanPham::paginate(5);
        }
        return view('quanly.danhmuc.danhsach', compact('danhMuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanly.danhmuc.themdanhmuc');
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
            'tendanhmuc' => 'required',
        ];
        $messages = [
            'tendanhmuc.required' => 'Vui lòng nhập tên danh mục',

        ];
        $request->validate($kiemTra, $messages);
        $danhMuc = new DanhMucSanPham();

        $danhMuc->tendanhmuc = $request->input('tendanhmuc');
        $danhMuc->slug = Str::slug($request->tendanhmuc, '-');
        $danhMuc->save();
        $request->session()->flash('success', 'Thêm sản phẩm thành công!');
        return redirect()->route('danhmuc.index');
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
        $danhMuc = DanhMucSanPham::find($id);
        return view('quanly.danhmuc.suadanhmuc', compact('danhMuc'));
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
            'tendanhmuc' => 'required',
        ];
        $messages = [
            'tendanhmuc.required' => 'Vui lòng nhập tên danh mục',
        ];
        $request->validate($kiemTra, $messages);
        $danhMuc = DanhMucSanPham::find($id);
        $danhMuc->tendanhmuc = $request->input('tendanhmuc');
        $danhMuc->slug       = Str::slug($request->input('tendanhmuc'),'-');
        $danhMuc->save();
        $request->session()->flash('success', 'Cập nhật sản phẩm thành công!');
        return redirect()->route('danhmuc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DanhMucSanPham::where('id', $id)->delete();

        return redirect()->route('danhmuc.index');
    }
}
