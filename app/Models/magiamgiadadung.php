<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\magiamgia;
use App\Models\donhang;
class magiamgiadadung extends Model
{
    use HasFactory;
    protected $table = 'magiamgiadadung';
    protected $fillable = ['id', 'magiamgia_id', 'user_id','donhang_id','thoigiandung'];
    public $timestamps = true;

    public function magiamgia()
    {
        $this->hasMany(magiamgia::class,'magiamgia_id','id');
    }

    public function donhang()
    {
        $this->hasMany(donhang::class,'donhang_id','id');
    }
}
