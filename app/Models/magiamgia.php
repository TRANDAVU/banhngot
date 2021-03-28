<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class magiamgia extends Model
{
    use HasFactory;
    protected $table = 'magiamgia';
    protected $fillable = ['id', 'tenma', 'pt_giam','soluong','Dk_apdung','tg_batdau','tg_ketthuc','ketthuctruochang'];
    public $timestamps = true;
}
