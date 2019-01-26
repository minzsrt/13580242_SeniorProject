<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Album extends Model
{   
    protected $fillable = ['name_album','cover_album','id_category'];

    public function user(){

        return $this->belongsTo('App\User', 'id_user');

    }

    public function category(){

        return $this->belongsTo('App\Category', 'id_category');

    }
}
