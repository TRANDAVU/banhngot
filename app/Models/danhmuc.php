<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    use HasFactory;
    protected $table = 'danhmuc';
    protected $fillable = ['id', 'danhmuc_ten', 'danhmuc_ten_en','slug'];
    public $timestamps = true;
}
