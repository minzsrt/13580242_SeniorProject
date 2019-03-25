<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Format_time;
use App\Events\TriggerNotification;
use App\Http\Requests\AlbumRequest;
use App\ImageAlbum;
use App\Notification as NotificationModel;
use App\Notifications\OrderCreatedEmail;
use App\Order;
use App\Photographer;
use App\DepositAccount;
use App\Bank;
use App\Review;
// use Request;
use App\PackageCard;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
use Notification;
use Storage;

class ReviewController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $checkorder = Review::where('id_order',$id)->first();
        if(empty($checkorder)){
            $finduser = Order::findOrFail($id);
            $id_photographer = $finduser->id_photographer;
            $user = User::findOrFail($id_photographer);
            return view('general.review',compact('user'))->with('id',$id); 
        }else{
            abort(404);
        }
               
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkorder = Review::where('id_order',$request->id_order)->first();
        if(empty($checkorder)){
            // print_r('empty');
            Review::create($request->all());
            return redirect('reviewSuccess');  
        }else{
            // print_r('not empty');
            abort(404);
        }
        // Review::create($request->all());
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
