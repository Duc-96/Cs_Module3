<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
 
class HoaDon extends Model
{
    protected $table = 'hoadon';
    public $timestamps = false;
    public function DonHang(){
        return $this->belongsTo(DonHang::class,'id_donhang','id');
    }
    public function SanPham(){
        return $this->belongsTo(SanPham::class,'id_sanpham','id');
    }
}