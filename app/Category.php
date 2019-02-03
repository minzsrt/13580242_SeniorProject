<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name_category'];

    public function album(){

        return $this->hasMany('App\Album','foreign_key');
        
    }

    public function package_card(){
        return $this->hasMany('App\PackageCard');
    }

    
}
