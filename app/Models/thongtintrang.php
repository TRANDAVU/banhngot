<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thongtintrang extends Model
{
    use HasFactory;
    protected $table = 'thongtintrang';
    protected $fillable = ['id', 'sdt', 'email','diachi',
    'facebook','zalo','twitter','whatapp','mota'];
    public $timestamps = false;
}
