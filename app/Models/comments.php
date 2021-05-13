<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\baiviet;
use App\Models\sanpham;
class comments extends Model
{
    //luu binh luan khach hang
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['id', 'noidung', 'sanpham_id','baiviet_id','luotthich','user_id','parent_id'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function baiviet()
    {
        return $this->belongsTo(baiviet::class,'baiviet_id','id');
    }

    public function sanpham()
    {
        return $this->belongsTo(sanpham::class,'sanpham_id','id');
    }
}
