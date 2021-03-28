<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thoigianlamviec extends Model
{
    use HasFactory;
    protected $table = 'thoigianlamviec';
    protected $fillable = ['id', 'noidung'];
    public $timestamps = false;
}
