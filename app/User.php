<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function photographer()
    {
        return $this->hasOne('App\Photographer');
    }

    public function album(){
        return $this->hasMany('App\Album');
    }

    public function package_card(){
        return $this->hasMany('App\PackageCard');
    }

    public function order(){
        return $this->hasMany('App\Review');
    }

    public function deposit(){
        return $this->hasMany('App\DepositAccount');
    }

    public function review(){
        return $this->hasMany('App\Review');
    }



}
