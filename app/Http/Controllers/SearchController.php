<?php

namespace App\Http\Controllers;
use App\User;
use App\Album;
use App\ImageAlbum;
use App\PackageCard;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Input::get ( 'category' );
        $price1 = Input::get ( 'price1' );
        $price2 = Input::get ( 'price2' );
        $formattime = Input::get ( 'formattime' );

        $package_cards = PackageCard::join('users', 'users.id', '=', 'package_cards.id_user')->Where([
            ['id_category','LIKE',$category],
            ['id_formattime', 'LIKE', $formattime],
        ])->whereBetween( 'price', [$price1, $price2] )->get();
            // dd(!empty($package_cards));

        if(!empty($package_cards)){
            // dd($package_cards);
            return view('general.search',compact('albums','image_albums','package_cards','categories','users'))->withDetails($package_cards);
        }
        else {
            return redirect('general.search')->with('status', 'Test ');
            // return back()->with('success','Item created successfully!');
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
