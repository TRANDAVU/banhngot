<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class khachhang extends Model
{
    use HasFactory;
    protected $table = 'khachhang';
    protected $fillable = ['id', 'khachhang_ten', 'user_id','khachhang_diachi','khachhang_sdt'];
    public $timestamps = true;

    public function User()
    {
        $this->belongsTo(User::class,'user_id','id');
    }
}
