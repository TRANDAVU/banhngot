<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietdanhmuc extends Model
{
    use HasFactory;
    //khoa ngoai ban san pham
    //thong tin chi tiet danh muc
    protected $table = 'chitietdanhmuc';
    protected $fillable = ['id', 'chitietdanhmuc_ten', 'chitietdanhmuc_ten_en','slug','danhmuc_id'];
    public $timestamps = true;
    
}
