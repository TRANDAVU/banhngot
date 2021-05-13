<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\hinhanhweb;
class hienthi extends Model
{
    use HasFactory;
    protected $table = 'hienthi';
    protected $fillable = ['id', 'tenhienthi', 'hinhanhvidu','mota'];
    public $timestamps = true;

    public function hinhanhweb()
    {
        return $this->hasMany(hinhanhweb::class,'tentrang_id','id');
    }
}
