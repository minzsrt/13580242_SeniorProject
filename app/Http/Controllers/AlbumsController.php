<?php

namespace App\Http\Controllers;

use App\Album; 
use App\ImageAlbum; 
use App\PackageCard;
use App\Category;
use App\User;
// use Request;
use Auth;
// use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AlbumRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;

class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::orderBy('id', 'DESC')->get();
        $package_cards = PackageCard::all();
        $categories = Category::all();
        return view('photographer.profile_photographer', compact('albums','package_cards','categories'));
    }

    public function show($username,$id){

        $data['username'] = $username;
        $album = Album::find($id);
        $photos = ImageAlbum::where('album_id',$album->id)->get();

        return view('photographer.show', $data, compact('album','photos')); 

    }

    public function create(){
        return view('photographer.createAlbum');
    }
    
    public function store(Request $request){

        $album = Album::create($request->all());
        if($request->hasFile('cover_album')){
    		$cover_album = $request->file('cover_album');
            $filename = $cover_album->store('photos', ['disk' => 'profile_files']);
    		$album->cover_album = $filename;
    		$album->save();
        }
        $album->save();
        return redirect('createAlbum/'.$album->id.'/upload');
    }

    public function uploadimage($id){
        $album = Album::find($id);
        return view('photographer.upload',compact('album'));
    }

    public function upload($id,Request $request){
        // dd($request->photos);
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos', ['disk' => 'my_files']);
            ImageAlbum::create([
                'name_image' => $filename,
                'album_id' => $request->id,
            ]);
        }
        return redirect('createAlbumSuccess');
    }

    public function edit($username,$id){

        $data['username'] = $username;
        $album = Album::find($id);
        $photos = ImageAlbum::where('album_id',$album->id)->get();
        $category = Category::pluck('name_category','id');

        return view('photographer.edit', $data, compact('album','photos','category')); 
    }

    public function update($username , $id , Request $request){

            $album = Album::findOrFail($id); 
            $album->fill([
                'name_album' => $request->name_album,
                'id_category' => $request->id_category,
            ]);

            if($request->hasFile('cover_album')){
                $cover_album = $request->file('cover_album');
                $filename = $cover_album->store('photos', ['disk' => 'profile_files']);
                $album->cover_album = $filename;
                $album->save();
            }
            $album->save();

            return redirect('profile/'.$username.'/album/'.$id.'/edit');
    }

    public function destroy($id){
        $album = Album::findOrFail($id);
        $image_albums = ImageAlbum::Where( 'album_id' , 'LIKE' , $id )->get();
        foreach ($image_albums as $image_album) {
            if(\File::exists(public_path('/'.$image_album->name_image))){
                \File::delete(public_path('/'.$image_album->name_image));
            }else{
                dd('File does not exists.');
            }
        }
        $album->delete();
		return redirect('profile/'.Auth::user()->username);
    }

     
    public function __construct(){

        $this->middleware('auth');

     }
     
    
}
