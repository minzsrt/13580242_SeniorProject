<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = ['name_bank'];
    

    public function deposit(){
        return $this->hasMany('App\DepositAccount');
    }
}
