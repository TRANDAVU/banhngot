<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table = 'sanpham';
    protected $fillable = ['id', 'sanpham_ten', 'sanpham_ten_en','soluongnhap',
    'soluongban','sp_mota','sp_mota_en','thongtinsp','thongtinsp_en',
    'hangsudung','khuyenmai_id','tinhtrangsp','donviban','chitietdanhmuc_id','slug'];
    public $timestamps = true;
}
