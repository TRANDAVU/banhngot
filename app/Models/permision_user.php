<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\level;
use App\Models\permision;
class permision_user extends Model
{
    use HasFactory;
    protected $table = 'permision_user';
    protected $fillable = ['id', 'level_id', 'permison_id'];
    public $timestamps = true;

    public function level()
    {
        $this->hasMany(level::class,'level_id','id');
    }

    public function permision()
    {
        $this->hasMany(permision::class,'permision_id','id');
    }
}
