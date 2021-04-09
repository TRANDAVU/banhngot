<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permision extends Model
{
    use HasFactory;
    protected $table = 'permision';
    protected $fillable = ['id', 'permison_ten', 'slug'];
    public $timestamps = false;
}
