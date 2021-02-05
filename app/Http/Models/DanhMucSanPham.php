<?php
namespace App\Http\Models;
use App\Http\Models\SanPham;


use Illuminate\Database\Eloquent\Model;
 
class DanhMucSanPham extends Model
{
    protected $table = 'danhmucsanpham';
    public $timestamps = false;

    public function SanPham(){
        return $this->hasMany(SanPham::class,'id_danhmuc','id');
    }
}