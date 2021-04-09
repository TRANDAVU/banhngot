<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tentrang;
use App\Models\hienthi;
class hinhanhweb extends Model
{
    use HasFactory;
    protected $table = 'hinhanhweb';
    protected $fillable = ['id', 'tentrang_id', 'hienthi_id','tenanh','mota'];
    public $timestamps = true;

    public function tentrang()
    {
        $this->hasMany(tentrang::class,'tentrang_id','id');
    }

    public function hienthi()
    {
        $this->hasMany(hienthi::class,'tentrang_id','id');
    }
}
