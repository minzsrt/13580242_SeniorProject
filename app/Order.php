<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    // protected $fillable = ['price','time_work','date_work','place','detail','transportation_cost','shipping_cost','total','status_order','status_payment'];

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

}
