<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\chitietdanhmuc;
use App\Models\khuyenmai;
use App\Models\comments;
class sanpham extends Model
{
    use HasFactory;
    protected $table = 'sanpham';
    protected $fillable = ['id', 'sanpham_ten', 'sanpham_ten_en','soluongnhap',
    'soluongban','sp_mota','sp_mota_en','thongtinsp','thongtinsp_en',
    'hangsudung','khuyenmai_id','tinhtrangsp','donviban','chitietdanhmuc_id','slug','sanpham_tag','sanpham_anh'];
    public $timestamps = true;

    public function chitietdanhmuc()
    {
        return $this->belongsTo(chitietdanhmuc::class,'chitietdanhmuc_id','id');
    }

    public function khuyenmai()
    {
        return $this->belongsTo(khuyenmai::class,'khuyenmai_id','id');
    }

    public function comments()
    {
        return $this->belongsTo(comments::class,'sanpham_id','id');
    }

   
}
