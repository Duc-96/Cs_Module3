<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\QuanLyController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\Admin\QuanLyKhachHangController;
use App\Http\Controllers\Admin\DangNhapController;
use App\Http\Controllers\Admin\QuanLySanPhamController;
use App\Http\Controllers\Admin\QuanLyDonHangController;
use App\Http\Controllers\Admin\QuanLyDanhMucController;
use App\Http\Controllers\ThongTinKhachHangController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\ThanhToanController;
use App\Http\Controllers\ThanhToanThanhCongController;
use App\Http\Controllers\NgonNguController;






// [HomeController::class,'index']
Route::get('/', [TrangChuController::class, 'trangChu']);

Route::get('/danh-muc/{slug}',[SanPhamController::class,'sanPhamTheoDanhMuc']);
Route::get('/gioi-thieu', [TrangChuController::class, 'gioiThieu'])->name('gioi-thieu');
Route::get('/san-pham/danh-sach-san-pham', [SanPhamController::class, 'sanPham'])->name('danh-sach-san-pham');
Route::get('/lien-he', [TrangChuController::class, 'lienHe'])->name('lien-he');
Route::get('/dang-nhap', [ThongTinKhachHangController::class, 'dangNhap'])->name('dang-nhap');
Route::post('/dang-nhap', [ThongTinKhachHangController::class, 'dangNhap'])->name('dang-nhap');
Route::get('/dang-ky', [ThongTinKhachHangController::class, 'dangKy'])->name('dang-ky');
Route::post('/dang-ky', [ThongTinKhachHangController::class, 'dangKy'])->name('dang-ky');
Route::get('/san-pham/{slug}', [SanPhamController::class, 'chiTietSanPham'])->name('chitiet');
Route::get('/gio-hang', [GioHangController::class, 'xemGioHang'])->name('giohang.xem');
Route::get('/gio-hang/{id}', [GioHangController::class, 'xoaSanPham'])->name('giohang.xoa');
Route::get('/giohang/xoa', [GioHangController::class, 'xoaGioHang'])->name('xoagiohang');
Route::post('/giohang/capnhat', [GioHangController::class, 'capNhatGioHang'])->name('giohang.capnhat');

Route::get('/them-gio-hang/{id}', [GioHangController::class, 'themGioHang'])->name('giohang.them');
Route::get('/thanhtoan', [ThanhToanController::class, 'thanhToan'])->name('thanhtoan');
Route::post('/thanhtoan', [ThanhToanController::class, 'datHang'])->name('dathang');
Route::get('/ngonngu/{ngonngu}', [NgonNguController::class, 'ngonNgu'])->name('ngonngu');
Route::get('/thanhcong', [ThanhToanThanhCongController::class, 'thanhToanThanhCong'])->name('thanhtoanthanhcong');







// ................................Admin.....................................
Route::get('/dangnhap-quanly', [DangNhapController::class, 'viewDangNhap'])->name('login');
 //->middleware('auth')
Route::post('/dangnhap-quanly/giao-dien', [DangNhapController::class, 'dangNhap'])->name('trangchu.quanly');
Route::prefix('/quanly')->group(function () {
    Route::resource('/khachhang', QuanLyKhachHangController::class);
    Route::resource('/sanpham', QuanLySanPhamController::class);
    Route::resource('/donhang', QuanLyDonHangController::class); 
    Route::resource('/danhmuc', QuanLyDanhMucController::class);   
});

