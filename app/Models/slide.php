<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    use HasFactory;
    protected $table = 'slide';
    protected $fillable = ['id', 'tentrang_id', 'noidung_qc','noidung_lamro',
    'hinhanh'];
    public $timestamps = true;
}
