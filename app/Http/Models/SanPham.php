<?php
namespace App\Http\Models;

use App\Http\Models\DanhMucSanPham;
use Illuminate\Database\Eloquent\Model;
 
class SanPham extends Model
{
    protected $table = 'sanpham';
    public $timestamps = false;

    public function DanhMucSanPham(){
        return $this->belongsTo(DanhMucSanPham::class,'id_danhmuc','id');
    }
    public function HoaDon(){
        return $this->hasMany(HoaDon::class,'id_sanpham','id');
    }
}