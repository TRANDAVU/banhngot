<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tentrang;
use App\Models\hienthi;
class noidungtrang extends Model
{
    use HasFactory;
    protected $table = 'noidungtrang';
    protected $fillable = ['id', 'tentieude', 'mota','tentrang_id','hienthi_id','motanhanmanh','motalamro','tentieude_en','motanhanmanh_en','motalamro_en'];
    public $timestamps = true;

    public function tentrang()
    {
        $this->belongsTo(tentrang::class,'tentrang_id','id');
    }

    public function hienthi()
    {
        $this->hasMany(hienthi::class,'hienthi_id','id');
    }
}
