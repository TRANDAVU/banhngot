<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class level extends Model
{
    use HasFactory;
    protected $table = 'level';
    protected $fillable = ['id', 'level_ten', 'mota','level_slug'];
    public $timestamps = true;

    public function user(){
        return $this->hasMany(User::class,'level_id','id');
    }
}
