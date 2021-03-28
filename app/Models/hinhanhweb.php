<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hinhanhweb extends Model
{
    use HasFactory;
    protected $table = 'hinhanhweb';
    protected $fillable = ['id', 'tenhienthi', 'hinhanhvidu','mota'];
    public $timestamps = true;
}
