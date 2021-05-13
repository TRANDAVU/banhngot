<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\level;
use App\Models\comments;
use App\Models\emaildangky;
use App\Models\khachhang;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use Notifiable,
        SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'slug',
        'provider', 
        'provider_id',
        'google_id',
        'avatar',
        'level_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function level()
    {
        return $this->belongsTo(level::class,'level_id','id');
    }

    public function comments()
    {
        return $this->belongsTo(comments::class,'user_id','id');
    }

    public function User()
    {
        return $this->hasMany(User::class,'user_id','id');
    }

    public function emaildangky()
    {
        return $this->belongsTo(emaildangky::class,'user_id','id');
    }

    public function khachhang()
    {
        return $this->belongsTo(khachhang::class,'user_id','id');
    }
}
