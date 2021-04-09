<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class emaildangky extends Model
{
    use HasFactory;
    protected $table = 'emaildangky';
    protected $fillable = ['id', 'user_id', 'email'];
    public $timestamps = true;

    public function User()
    {
        $this->hasOne(User::class,'user_id','id');
    }
}
