<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'rating', 'comment', 'id_order' , 'id_user' , 'id_photographer',
    ];

    public function user(){

        return $this->belongsTo('App\User', 'id_user');

    }

    public function photographer(){

        return $this->belongsTo('App\User', 'id_photographer');

    }

}
