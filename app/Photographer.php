<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    protected $fillable = [
        'name', 'idcard', 'birthday', 'sex', 'address', 'sub_district', 'district', 'province', 'zipcode', 'phone'
    ];

    public function user(){

        return $this->belongsTo('App\User', 'id_user');

    }

}
