<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tentrang;
class slide extends Model
{
    use HasFactory;
    protected $table = 'slide';
    protected $fillable = ['id', 'tentrang_id', 'noidung_qc','noidung_lamro',
    'hinhanh'];
    public $timestamps = true;

    public function tentrang()
    {
        $this->hasMany(tentrang::class,'tentrang_id','id');
    }
}
