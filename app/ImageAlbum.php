<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageAlbum extends Model
{
    protected $fillable = ['album_id', 'name_image'];

    public function album(){

        return $this->belongsTo('App\Album');

    }

}
