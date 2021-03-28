<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thongkebanhang extends Model
{
    use HasFactory;
    protected $table = 'thongkebanhang';
    protected $fillable = ['id', 'sl_ban', 'tongtienban','thangban',
    'namban'];
    public $timestamps = false;
}
