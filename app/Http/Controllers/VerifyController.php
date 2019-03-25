<?php

namespace App\Http\Controllers;
use App\Album;
use App\Category;
use App\ImageAlbum;
use App\PackageCard;
use App\User;
use App\Order;
use App\Review;
use App\VerifyCard;
use App\DepositAccount;
use App\Statusverify;

use Auth;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;

class VerifyController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($username)
    {
        $user = User::whereUsername($username)->first();
        
        if(!empty($user)){
            if($user->role_id == '2' && Auth::user()->id == $user->id){
                $checkverify = VerifyCard::where('id_user',$user->id)->first();
                return view('photographer.verify.verify',compact('user','checkverify'));        
            }else{
                abort(404);            
            }
        }else{
            abort(404);            
        }

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
    public function store($username , Request $request)
    {
        $verify = VerifyCard::create($request->all());
        // dd($request->all());
        if($request->hasFile('copy_id_card')){
    		$copy_id_card = $request->file('copy_id_card');
            $filename = $copy_id_card->store('verify', ['disk' => 'profile_files']);
    		$verify->copy_id_card = $filename;
    		$verify->save();
        }
        $verify->save();
        return redirect('verify/'.$username);  
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
    public function update($username,Request $request)
    {
        $user = User::whereUsername($username)->first();
        $verify = VerifyCard::where('id_user',$user->id)->first();   
        
        $verify->fill([
            'status_verify' => $request->status_verify,
            'id_user' => $request->id_user,
        ]);

        if($request->hasFile('copy_id_card')){
    		$copy_id_card = $request->file('copy_id_card');
            $filename = $copy_id_card->store('verify', ['disk' => 'profile_files']);
    		$verify->copy_id_card = $filename;
    		$verify->save();
        }
        
        $verify->save();        

        return redirect('verify/'.$username);  
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
