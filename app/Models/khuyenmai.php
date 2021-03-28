<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khuyenmai extends Model
{
    use HasFactory;
    protected $table = 'khuyenmai';
    protected $fillable = ['id', 'sanpham_id', 'pt_giam','apdung'];
    public $timestamps = true;
}
