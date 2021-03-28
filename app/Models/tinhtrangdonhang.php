<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tinhtrangdonhang extends Model
{
    use HasFactory;
    protected $table = 'tinhtrangdonhang';
    protected $fillable = ['id', 'tinhtrang_ten'];
    public $timestamps = false;
}
