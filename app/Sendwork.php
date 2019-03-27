<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sendwork extends Model
{
    protected $fillable = ['filename','id_order'];

    public function order(){

        return $this->belongsTo('App\Order');

    }
}
