<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use App\Ad;
use Spatie\Activitylog\Traits\LogsActivity;


class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;
    use LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','surname', 'password', 'facebook_id', 'user_id', 'ad_id',
    ];

    protected static $logAttributes = ['name', 'email','surname',];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function ads()
    {
      return $this->hasMany('App\Ad','user_id');
    }


    public function msgs()
    {
        return $this->hasManyThrough('App\Message', 'App\Ad', 'user_id', 'ad_id', 'id');
    }

    public function favorites()
    {
        return $this->belongsToMany('App\Ad', 'favorites', 'user_id', 'ad_id');
    }

}
