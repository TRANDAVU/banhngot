<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\magiamgiadadung;
class magiamgia extends Model
{
    use HasFactory;
    protected $table = 'magiamgia';
    protected $fillable = ['id', 'tenma', 'pt_giam','soluong','Dk_apdung','tg_batdau','tg_ketthuc','ketthuctruochang'];
    public $timestamps = true;

    public function magiamgiadadung()
    {
        return $this->belongsTo(magiamgiadadung::class,'magiamgia_id','id');
    }
}
