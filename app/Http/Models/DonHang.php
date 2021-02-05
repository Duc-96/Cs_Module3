<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
 
class DonHang extends Model
{
    protected $table = 'donhang';
    public $timestamps = false;

    public function HoaDon(){
        return $this->hasMany(HoaDon::class,'id_donhang','id');
    }
}