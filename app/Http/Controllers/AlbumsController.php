<?php

namespace App\Http\Controllers;

use App\Album; 
use App\ImageAlbum; 
use App\PackageCard;
use App\Category;
use App\User;
use Request;
use Auth;
use Storage;
use App\Http\Requests\AlbumRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\UploadedFile;

class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::orderBy('id', 'DESC')->get();
        $package_cards = PackageCard::all()->groupBy('id_category')->get();
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
        $album->id_user = Auth::user()->id;
        $album_id = $album->id;
        // dd($album->id);
        foreach ($request->photos as $photo) {
            // $filename = $photo->store('public/images');
            $filename = $photo->store('photos', ['disk' => 'my_files']);
            ImageAlbum::create([
                'name_image' => $filename,
                'album_id' => $album_id
            ]);
        }
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
