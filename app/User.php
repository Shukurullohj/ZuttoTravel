<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Activity;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'name';
    }
                    
    public function getAvatarPathAttribute($avatar)
    {
        return $avatar ?: '/images/avatars/default.jpg';
    }
    public function places()
    {
        return $this->hasMany(Place::class)->latest();
    }
    public function activity()
    {
        return $this->hasMany(Activity::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
        /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
