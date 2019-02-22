<?php

namespace App\Http\Controllers;

use App\Album; 
use App\ImageAlbum; 
use App\PackageCard;
use App\Category;
use App\User;
use Auth;
use Storage;
use Illuminate\Http\Request;
use App\Http\Requests\AlbumRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;

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

        $package_cards = PackageCard::Where([
            ['id_category','LIKE',$category],
            ['id_formattime', 'LIKE', $formattime], 
        ])->whereBetween( 'price', [$price1, $price2] )->get();
        
        $data['category'] = $category;
        $data['price1'] = $price1;
        $data['price2'] = $price2;
        $data['formattime'] = $formattime;

        if(!empty($package_cards)){
            $albums = Album::all();
            $data['alertsearch'] = '';
            // $categories = Category::Where('id','LIKE',$category)->get();
            // $data['name_category'] = $categories;
            return view('general.search',$data,compact('albums','image_albums','package_cards','categories','users'))->withDetails($package_cards);
        }
        else {
            $data['alertsearch'] = 'Search not found!';
            return redirect('general.search',$data);
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
