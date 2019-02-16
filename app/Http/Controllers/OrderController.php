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

class OrderController extends Controller
{
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
    public function create()
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

     /**
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        $order = $request->session()->get('order');
        return view('/orderstep1',compact('order', $order));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'id_category' => 'required',
        ]);

        if(empty($request->session()->get('order'))){
            $order = new Order();
            $order->fill($validatedData);
            $request->session()->put('order', $order);
            // dd($request->id_category);
        }else{
            $order = $request->session()->get('order');
            $order->fill($validatedData);
            $request->session()->put('order', $order);
            $order->id_category = $request->id_category;
            // dd($order->id_category);
        }
        
        return redirect('/orderstep2');

    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Request $request)
    {
        $order = $request->session()->get('order');
        return view('/orderstep2',compact('order', $order));
    }
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'id_formattime' => 'required',
        ]);
        $order = $request->session()->get('order');
        $request->session()->put('order', $order);
        $order->id_formattime = $request->id_formattime;
        return redirect('/orderstep3');

    }
    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3(Request $request)
    {
        $order = $request->session()->get('order');
        return view('/orderstep3',compact('order',$order));
    }
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep3(Request $request)
    {
        $validatedData = $request->validate([
            'time_work' => 'required',
        ]);
        $order = $request->session()->get('order');
        $request->session()->put('order', $order);
        $order->time_work = $request->time_work;
        return redirect('/orderstep4');

    }
    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep4(Request $request)
    {
        $order = $request->session()->get('order');
        return view('/orderstep4',compact('order',$order));
    }
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep4(Request $request)
    {
        $validatedData = $request->validate([
            'date_work' => 'required',
        ]);
        $order = $request->session()->get('order');
        $request->session()->put('order', $order);
        $order->date_work = $request->date_work;
        return redirect('/orderstep5');

    }
    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep5(Request $request)
    {
        $order = $request->session()->get('order');
        return view('/orderstep5',compact('order',$order));
    }
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep5(Request $request)
    {
        $validatedData = $request->validate([
            'place' => 'required',
        ]);
        $order = $request->session()->get('order');
        $request->session()->put('order', $order);
        $order->place = $request->place;
        return redirect('/orderstep6');

    }

    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep6(Request $request)
    {
        $order = $request->session()->get('order');
        // dd($order->id_category);
        // dd($order->id_formattime);
        // dd($order->time_work);
        // dd($order->date_work);
        // dd($order->place);
        return view('/orderstep6',compact('order',$order));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $order = Order::create($request->all());
        // $order->id_user = Auth::user()->id;
        // $order->id_employer = '3';
        $order->status_order = 'Waiting for confirmation';
        $order->status_payment = 'Unpaid';
        $order->price = '2700';
        $order->total = '2700';
        $order->detail = 'test';
        $order->save();
        return redirect('/');
    }

}
