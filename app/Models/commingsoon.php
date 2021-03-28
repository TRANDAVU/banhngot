<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commingsoon extends Model
{
    use HasFactory;
    protected $table = 'commingsoon';
    protected $fillable = ['id', 'ngay', 'gio','phut','giay','thongdiep','thongdiep_en','hienthi'];
    public $timestamps = true;
}
