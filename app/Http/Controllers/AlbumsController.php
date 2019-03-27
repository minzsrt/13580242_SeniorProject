<?php

namespace App\Http\Controllers;

use App\Album; 
use App\ImageAlbum; 
use App\PackageCard;
use App\Category;
use App\User;
// use Request;
use Auth;
use Zipper;
// use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AlbumRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;

class AlbumsController extends Controller
{
    public function __construct(){

        $this->middleware('auth',['except'=>['show','downloadZip']]);

     }
    public function index(){
       
    }

    public function show($username,$id){
        $data['username'] = $username;
        $album = Album::find($id);
        $photos = ImageAlbum::where('album_id',$album->id)->get();
        return view('photographer.show', $data, compact('album','photos')); 
    }

    public function create(){
        $category = Category::pluck('name_category','id');
        return view('photographer.createAlbum',compact('category'));
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
        $checkalbum = ImageAlbum::where('album_id',$id)->first();

        if(empty($checkalbum)){
            foreach ($request->photos as $photo) {
                $filename = $photo->store('photos', ['disk' => 'my_files']);
                ImageAlbum::create([
                    'name_image' => $filename,
                    'album_id' => $request->id,
                ]);
            }
            return redirect('createAlbumSuccess');
        }else{
            foreach ($request->photos as $photo) {
                $filename = $photo->store('photos', ['disk' => 'my_files']);
                ImageAlbum::create([
                    'name_image' => $filename,
                    'album_id' => $request->id,
                ]);
            }
            return redirect('profile/'.Auth::user()->username.'/album/'.$id.'/edit')->with('alertedit', 'เพิ่มรูปในอัลบั้มสำเร็จ!');
        }

        
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

            return redirect('profile/'.$username.'/album/'.$id.'/edit')->with('alertedit', 'แก้ไขอัลบั้มสำเร็จ!');
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
		return redirect('profile/'.Auth::user()->username)->with('alertdelete', 'ลบอัลบั้ม'.$album->name_album.'สำเร็จ!');
    }

    public function download($id)
    {
        $ImageAlbum = ImageAlbum::findOrFail($id);
        $file_path = $ImageAlbum->name_image; 
        return '<a href=" /'.$ImageAlbum->name_image.' " download=" /'.$ImageAlbum->name_image.'">download</a>';
         
    }


     

     
    
}
