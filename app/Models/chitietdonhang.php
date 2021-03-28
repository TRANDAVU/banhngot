<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    use HasFactory;
    //chi tiet san pham don hang
    protected $table = 'chitietdonhang';
    protected $fillable = ['id', 'sanpham_id', 'soluong','donhang_id'];
    public $timestamps = true;
    
}
