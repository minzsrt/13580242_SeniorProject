<?php

namespace App\Http\Controllers;

use Auth;
use App\User; 
use App\Album; 
use App\PackageCard;
use App\Category;
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
                return view('photographer.index', compact('albums','package_cards','categories'));
    
            }elseif($checkrole == 3){
                $albums = Album::orderBy('id', 'DESC')->get();
                $package_cards = PackageCard::all();
                $categories = Category::all();
                return view('general.index', compact('albums','package_cards','categories'));
    
            }
           

        }else{
            $albums = Album::orderBy('id', 'DESC')->get();
            $package_cards = PackageCard::all();
            $categories = Category::all();
            return view('general.index', compact('albums','package_cards','categories'));
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
