<?php

namespace App\Http\Controllers;

use Auth;
use App\User; 
use App\Album; 
use App\PackageCard;
use App\Category;
use Request;
use App\Http\Requests\AlbumRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::orderBy('id', 'DESC')->get();
        $package_cards = PackageCard::all();
        $categories = Category::all();
        return view('profilePhotographer', compact('albums','package_cards','categories'));
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
                    $package_cards = PackageCard::all();
                    $categories = Category::all();
                    return view('photographer.profile', compact('albums','package_cards','categories'))->withUser($user);
    
                }elseif($user && $user->role_id == 3){
    
                    return view('general.profile')->withUser($user);
    
                }
            }elseif($user->username != $authcheck ){
                if($user->role_id == 2){
    
                    $albums = Album::orderBy('id', 'DESC')->get();
                    $package_cards = PackageCard::all();
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
