<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    //luu binh luan khach hang
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['id', 'noidung', 'sanpham_id','baiviet_id','luotthich','user_id'];
    public $timestamps = true;
}
