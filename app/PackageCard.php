<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageCard extends Model
{
    protected $fillable = ['price', 'detail', 'shipping', 'shipping_cost', 'id_category', 'id_formattime'];
}
