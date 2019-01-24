<?php

namespace App\Http\Controllers;

use App\Album; 
use App\PackageCard;
use App\Category;
use Request;
use App\Http\Requests\AlbumRequest;


class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::orderBy('id', 'DESC')->get();
        $package_cards = PackageCard::all();
        $categories = Category::all();
        return view('photographer.profile_Photographer', compact('albums','package_cards','categories'));
    }

    public function show($id){
        $album = Album::find($id);
        if(empty($album))
        abort(404);
        return view('photographer.show', compact('album')); 
    }

    public function create(){
        return view('photographer.createAlbum');
    }
    
    public function store(AlbumRequest $request){
        Album::create($request->all());
        return redirect('createAlbumSuccess'); 
        
    }

    public function edit($id){
        $album = Album::find($id);
        if(empty($album))
        abort(404);
        return view('photographer.edit', compact('album'));
    }

    public function update($id, AlbumRequest $request){
        $album = Album::findOrFail($id); 
        $album->update($request->all());
        return redirect('profile_Photographer');
    }

    public function destroy($id){
		$album = Album::findOrFail($id);
		$album->delete();
		return redirect('profile_Photographer');
    }

     
    public function __construct(){

        $this->middleware('auth');

     }
     
    
}
