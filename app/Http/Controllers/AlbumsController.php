<?php

namespace App\Http\Controllers;

use App\Album; 
use Request;

class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::all();
        return view('profilePhotographer', compact('albums'));
    }

    public function create(){
        return view('createAlbum');
    }
    
    public function store(){
        $input = Request::all();
        Album::create($input);
        Return redirect('createAlbumSuccess'); 
    }
}
