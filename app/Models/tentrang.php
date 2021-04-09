<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\hinhanhweb;
use App\Models\noidungtrang;
class tentrang extends Model
{
    use HasFactory;
    protected $table = 'tentrang';
    protected $fillable = ['id', 'tentrang','motaatrang'];
    public $timestamps = false;

    public function hinhanhweb()
    {
        return $this->belongsTo(hinhanhweb::class,'tentrang_id','id');
    }

    public function noidungtrang()
    {
        return $this->hasMany(noidungtrang::class,'tentrang_id','id');
    }
}
