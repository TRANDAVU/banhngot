<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class magiamgiadadung extends Model
{
    use HasFactory;
    protected $table = 'magiamgiadadung';
    protected $fillable = ['id', 'magiamgia_id', 'user_id','donhang_id','thoigiandung'];
    public $timestamps = true;
}
