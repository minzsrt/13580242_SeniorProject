<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositAccount extends Model
{
    protected $fillable = ['deposit_account_number','book_bank_copy','total','id_photographer','id_bank'];
    
    public function user(){

        return $this->belongsTo('App\User', 'id_photographer');

    }

    public function bank(){

        return $this->belongsTo('App\Bank', 'id_bank');

    }


}
