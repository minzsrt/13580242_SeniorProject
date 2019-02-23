<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order; 
use App\Album; 
use App\ImageAlbum; 
use App\PackageCard;
use App\Category;
use App\User;
// use Request;
use Auth;
use Storage;
use App\Http\Requests\AlbumRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($username)
    {
        $user = User::whereUsername($username)->first();
        $orders = Order::where('id_photographer','Like',$user->id)->get();
        foreach ($orders as $order){
            $employer = User::where('id','like',$order->id_employer)->get();
        }

        return view('photographer.notifications.notification',compact('user','orders','employer'))->with('username',$username);
        
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
