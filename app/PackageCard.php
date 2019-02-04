<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageCard extends Model
{
    protected $fillable = ['price', 'detail', 'shipping', 'shipping_cost', 'id_category', 'id_formattime'];

    public function user(){

        return $this->belongsTo('App\User', 'id_user');

    }

    public function formattime(){

        return $this->belongsTo('App\Format_time', 'id_formattime');

    }

    public function category(){

        return $this->belongsTo('App\Category', 'id_category');

    }
}
