<?php

namespace App\Http\Controllers;

use App\Album; 
use App\PackageCard;
use App\Category;
use Request;
use Auth;
use App\Http\Requests\AlbumRequest;



class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::orderBy('id', 'DESC')->get();
        $package_cards = PackageCard::all();
        $categories = Category::all();
        return view('photographer.profile_photographer', compact('albums','package_cards','categories'));
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
        $album = Album::create($request->all());
        $album->id_user = Auth::user()->id; $album->save();
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
        return redirect('profile_photographer');
    }

    public function destroy($id){
		$album = Album::findOrFail($id);
		$album->delete();
		return redirect('profile_photographer');
    }

     
    public function __construct(){

        $this->middleware('auth');

     }
     
    
}
