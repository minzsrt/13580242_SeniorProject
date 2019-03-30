<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scopework extends Model
{
    protected $fillable = ['scopework'];

    public function photographer(){

        return $this->hasMany('App\Photographer');

    }
    
}
