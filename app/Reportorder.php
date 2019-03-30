<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportorder extends Model
{
    protected $fillable = ['reason', 'detail', 'id_user','id_order'];
    public function user(){

        return $this->belongsTo('App\User');

    }

    public function order(){

        return $this->belongsTo('App\Order');

    }

}
