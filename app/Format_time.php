<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format_time extends Model
{
    protected $fillable = ['name_format_time'];

    public function package_card(){
        return $this->hasMany('App\PackageCard');
    }
    
}
