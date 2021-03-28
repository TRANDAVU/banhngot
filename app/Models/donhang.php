<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    use HasFactory;
    protected $table = 'donhang';
    protected $fillable = ['id', 'khachhang_id', 'magiamgiasudung_id','thanhtien','thanhtiensaugiam','tinhtrangdonhang_id','loaihinhthanhtoan_id'];
    public $timestamps = true;
}
