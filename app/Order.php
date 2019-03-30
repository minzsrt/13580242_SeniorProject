<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    // protected $fillable = ['price','start_time','end_time','date_work','detail','transportation_cost','shipping_cost','total','place_id','place_name','lat','lng','address','url','status_order','status_payment','id_category','id_formattime','id_employer','id_photographer'];

    public function employer(){

        return $this->belongsTo('App\User', 'id_employer');

    }

    public function photographer()
    {
        return $this->belongsTo('App\User', 'id_photographer');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'id_category');
    }

    public function formattime()
    {
        return $this->belongsTo('App\Format_time', 'id_formattime');
    }

    public function payment()
    {
        return $this->hasOne('App\Payment');
    }

    public function sendwork(){

        return $this->hasMany('App\Sendwork');
        
    }

    public function reportorder(){

        return $this->hasMany('App\Reportorder');

    }

}
