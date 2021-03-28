<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    use HasFactory;
    protected $table = 'level';
    protected $fillable = ['id', 'level_ten', 'mota','level_slug'];
    public $timestamps = true;
}
