<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{  
    protected $fillable = ['price','time_work','date_work','place','detail','transportation_cost','shipping_cost','total','status_order','status_payment'];

    public function user(){
        return $this->belongsToMany('App\User')->withPivot('id_employer', 'id_photographer');

    }

    public function category(){

        return $this->belongsTo('App\Category', 'id_category');

    }

    public function formattime(){

        return $this->belongsTo('App\Format_time', 'id_formattime');

    }
}
