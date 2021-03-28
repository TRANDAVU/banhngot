<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentrang extends Model
{
    use HasFactory;
    protected $table = 'tentrang';
    protected $fillable = ['id', 'tentrang','motaatrang'];
    public $timestamps = false;
}
