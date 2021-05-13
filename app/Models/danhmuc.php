<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\chitietdanhmuc;
use App\Models\sanpham;
class danhmuc extends Model
{
    use HasFactory;
    protected $table = 'danhmuc';
    protected $fillable = ['id', 'danhmuc_ten', 'danhmuc_ten_en','slug'];
    public $timestamps = true;

    public function danhmuc()
    {
        return $this->hasMany(chitietdanhmuc::class,'danhmuc_id','id');
    }

    public function danhmucsanpham()
    {
        return $this->hasManyThrough(chitietdanhmuc::class,sanpham::class,'chitietdanhmuc_id','danhmuc_id','id','id');
    }
}
