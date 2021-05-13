<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comments;
class baiviet extends Model
{
    use HasFactory;
    protected $table = 'baiviet';
    protected $fillable = ['id', 'tenbaiviet', 'tenbaiviet_en',
    'noidung','noidung_en','anhbaiviet'];
    public $timestamps = true;

    public function comments()
    {
        return $this->hasMany(comments::class,'comment_id','id');
    }
}
