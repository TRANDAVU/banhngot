<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\khachhang;
use App\Models\tinhtrangdonhang;
use App\Models\chitietdonhang;
use App\Models\magiamgiadadung;
class donhang extends Model
{
    use HasFactory;
    protected $table = 'donhang';
    protected $fillable = ['id', 'khachhang_id', 'magiamgia_id','thanhtien','thanhtiensaugiam','tinhtrangdonhang_id','loaihinhthanhtoan_id'];
    public $timestamps = true;

    public function khachhang()
    {
        return $this->belongsTo(khachhang::class,'khachhang_id','id');
    }

    public function tinhtrangdonhang()
    {
        return $this->hasMany(tinhtrangdonhang::class,'tinhtrangdonhang_id','id');
    }

    public function chitietdonhang()
    {
        return $this->hasOne(chitietdonhang::class,'donhang_id','id');
    }

    public function magiamgiadadung()
    {
        return $this->hasOne(magiamgiadadung::class,'donhang_id','id');
    }
}
