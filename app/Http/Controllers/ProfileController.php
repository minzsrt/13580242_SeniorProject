<?php

namespace App\Http\Controllers;

use Auth;
use App\User; 
use App\Album; 
use App\ImageAlbum; 
use App\PackageCard;
use App\Category;
use Request;
use DB;
use App\Http\Requests\AlbumRequest;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {   
        $user = User::whereUsername($username)->first();
        $authcheck = Auth::user()->username;

        if( $user ){ 

            if($user->username == $authcheck ){
                if($user && $user->role_id == 2){
    
                    $albums = Album::orderBy('id', 'DESC')->get();

                    $package_cards = PackageCard::where('id_user','LIKE', $user->id)->groupBy('id_category')->get();
                    // dd($package_cards);

                    $categories = Category::all();
                    $image_albums = ImageAlbum::all();
                    return view('photographer.profile', compact('albums','package_cards','categories','image_albums'))->withUser($user);
    
                }elseif($user && $user->role_id == 3){
    
                    return view('general.profile')->withUser($user);
    
                }
            }elseif($user->username != $authcheck ){
                if($user->role_id == 2){

                    $url = url()->current();
                    $slice = Str::after($url , 'http://127.0.0.1:8000/profile/');
                    // dd($slice);

                    $authall = User::where('username','Like',$slice)->get();
                    // dd($authall->pluck('id'));

                    $id_user = $authall->pluck('id');
                    // dd($id_user);

                    $albums = Album::orderBy('id', 'DESC')->get();
                    $package_cards = PackageCard::Where('id_user', 'LIKE', $id_user)->groupBy('id_category')->get();
                    // dd($package_cards);
                    if(empty($package_cards))
                    abort(404);

                    $categories = Category::all();

                    return view('general.viewphotographer',compact('albums','package_cards','categories'))->withUser($user);
    
                }elseif($user && $user->role_id == 3){
    
                    return view('general.viewgeneral')->withUser($user);
    
                }
            }
        }else{
            //รอใส่ Error page
            // dd($user);   
            return $username;
            
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function __construct(){

    //     $this->middleware('auth');

    //  }
}
