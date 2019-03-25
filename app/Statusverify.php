<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statusverify extends Model
{
    protected $fillable = ['status_verify','id_user'];
    
    public function user(){

        return $this->belongsTo('App\User', 'id_user');

    }

    public function verifycard(){

        return $this->hasMany('App\VerifyCard','id');

    }
}
