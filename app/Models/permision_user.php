<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permision_user extends Model
{
    use HasFactory;
    protected $table = 'permision_user';
    protected $fillable = ['id', 'level_id', 'permison_id'];
    public $timestamps = true;
}
