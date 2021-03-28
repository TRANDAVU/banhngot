<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tholambanh extends Model
{
    use HasFactory;
    protected $table = 'tholambanh';
    protected $fillable = ['id', 'tentholambanh', 'kinhngiem','anhdaidien'];
    public $timestamps = false;
}
