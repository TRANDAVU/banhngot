<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noidungtrang extends Model
{
    use HasFactory;
    protected $table = 'noidungtrang';
    protected $fillable = ['id', 'tentieude', 'mota','tentrang_id','hienthi_id','motanhanmanh','motalamro','tentieude_en','motanhanmanh_en','motalamro_en'];
    public $timestamps = true;
}
