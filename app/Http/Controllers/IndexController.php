<?php

namespace App\Http\Controllers;

use Auth;
use App\User; 
use App\Album; 
use App\ImageAlbum; 
use App\PackageCard;
use App\Category;
use App\DepositAccount; 
use App\Order; 
use App\Format_time;
use App\Events\TriggerNotification;
use App\Http\Requests\AlbumRequest;
use App\Notification as NotificationModel;
use App\Notifications\OrderCreatedEmail;
use App\Photographer;
use App\Bank;
use App\VerifyCard;
use App\Statusverify;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        if(Auth::check()){
            
            $checkrole = Auth::user()->role_id;

            if($checkrole == 2){
    
                $albums = Album::orderBy('id', 'DESC')->get();
                $package_cards = PackageCard::all();
                $categories = Category::all();
                $orders = Order::where('id_photographer', Auth::user()->id)->get();
                $deposits = DepositAccount::where('id_photographer','LIKE',Auth::user()->id)->get();
                $verify = VerifyCard::where('id_user',Auth::user()->id)->first();

                return view('photographer.index', compact('albums','package_cards','categories','deposits','orders','verify'));
    
            }elseif($checkrole == 3){
                $albums = Album::orderBy('id', 'DESC')->get();
                $package_cards = PackageCard::all();
                $categories = Category::all();
                $image_albums = ImageAlbum::all();
                return view('general.index', compact('albums','package_cards','categories','image_albums'));
    
            }
            elseif($checkrole == 1){
                $albums = Album::orderBy('id', 'DESC')->get();
                $package_cards = PackageCard::all();
                $categories = Category::all();
                $image_albums = ImageAlbum::all();

                $allusercount = User::Where(function ($query) {
                    $query->where('role_id', '=', 2)
                          ->orWhere('role_id', '=', 3);
                })->count();
                $ptusercount = User::where('role_id','2')->count();
                $gnusercount = User::where('role_id','3')->count();
                // dd($allusercount);
                return view('admin.index', compact('albums','package_cards','categories','image_albums','allusercount','ptusercount','gnusercount'));
    
            }
           

        }else{
            $albums = Album::orderBy('id', 'DESC')->get();
            $package_cards = PackageCard::all();
            $categories = Category::all();
            $image_albums = ImageAlbum::all();
            return view('index', compact('albums','package_cards','categories','image_albums'));
        }
        

        // return view('photographer.index');        
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
    public function show($id)
    {
        //
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
}
