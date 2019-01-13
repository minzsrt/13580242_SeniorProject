<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album; 

class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::all();
        return view('profilePhotographer', compact('albums'));
    }
    // public function show($id_album){
    //     $albums = Article::find($id_album);
    //     if(empty($album))
    //         abort(404);
    //     return view('profilePhotographer.show', compact('profilePhotographer')); 
    // }
}
