<?php

namespace App\Http\Controllers;

use App\Album; 
use App\ImageAlbum; 
use App\PackageCard;
use App\Category;
use App\User;
use App\Order;
use App\Review;
use App\Scopework;
use Auth;
use Storage;
use Illuminate\Http\Request;
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
    public function index(Request $request)
    {
        $search = $request;
        $category = Input::get ( 'category' );
        $price1 = Input::get ( 'price1' );
        $price2 = Input::get ( 'price2' );
        $formattime = Input::get ( 'formattime' );
        $scope = Input::get ( 'scopework' );
        $date = Input::get ( 'date' );
        
        $id_category = Category::all();
        $scopeworks = Scopework::all();
        $disableddate = Order::all();
        // $price1 = isset( Input::get ( 'price1' )) ? Input::get ( 'price1' ) : ''; 
        // dd($price1);
        if(!empty($category) && !empty($price1) && !empty($price2) && !empty($formattime)){

            $package_cards = PackageCard::Where([
                ['id_category','LIKE',$category],
                ['id_formattime', 'LIKE', $formattime],
            ])->whereBetween( 'price', [$price1, $price2] )->groupBy('id_user')->orderBy('price','ASC')->get();
            
            if(!empty($package_cards)){
                $albums = Album::all(); 
                $data['price1'] =  $price1 ;
                $data['price2'] =  $price2 ;
                $data['formattime'] =  $formattime ;
                $data['scope'] =  $scope ;
                $data['date'] =  $date ;
                $categorySearch = Category::findOrFail($category); 
                return view('general.search',$data,compact('albums','id_category','categorySearch','package_cards','scopeworks','disableddate'))->withDetails($package_cards);
            }
            else {
                $data['price1'] =  $price1 ;
                $data['price2'] =  $price2 ;
                $data['formattime'] =  $formattime ;
                $data['scope'] =  $scope ;
                $data['date'] =  $date ;
                return view('general.search',$data,compact('id_category','scopeworks','disableddate'))->with('alertsearch', 'ไม่พบช่างภาพที่คุณค้นหา!');
            }
        }

        $data['price1'] =  $price1 ;
        $data['price2'] =  $price2 ;

        return view('general.search',$data,compact('albums','id_category','package_cards','disableddate','scopeworks'))->with('alertsearch', 'ไม่พบช่างภาพที่คุณค้นหา!');

        
        
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
