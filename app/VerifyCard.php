<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyCard extends Model
{
    protected $fillable = ['copy_id_card','id_status','id_user'];
    
    public function user(){

        return $this->belongsTo('App\User', 'id_user');

    }

    public function statusverify(){

        return $this->belongsTo('App\Statusverify', 'id_status');

    }

}
