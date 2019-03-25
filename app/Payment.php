<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    // relation

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
