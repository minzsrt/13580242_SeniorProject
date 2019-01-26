<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageAlbum extends Model
{
    protected $fillable = ['id_album', 'name_image'];

    public function album()
    {
        return $this->belongsTo('App\Album','id_album');
    }
}
