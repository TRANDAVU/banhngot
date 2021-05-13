<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sanpham;
class khuyenmai extends Model
{
    use HasFactory;
    protected $table = 'khuyenmai';
    protected $fillable = ['id', 'pt_giam','apdung'];
    public $timestamps = true;

    public function sanpham()
    {
        return $this->hasMany(sanpham::class,'khuyenmai_id','id');
    }
}
