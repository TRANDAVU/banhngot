<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cautraloi extends Model
{
    //dung trong trang faq luu cau hoi vaf tra loi trong trang
    use HasFactory;
    protected $table = 'cautraloi';
    protected $fillable = ['id', 'cauhoi', 'cautraloi'];
    public $timestamps = true;
}
