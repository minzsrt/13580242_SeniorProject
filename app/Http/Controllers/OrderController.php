<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Events\TriggerNotification;
use App\Http\Requests\AlbumRequest;
use App\ImageAlbum;
use App\Notification as NotificationModel;
use App\Notifications\OrderCreatedEmail;
use App\Notifications\OrderFreelanceAcceptEmail;
use App\Order;
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        // dd($order);
        return view('photographer.notifications.orders.invoice', compact('order'));

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
        $order = Order::findOrFail($id);
        $order->total = $request->price + $request->transportation_cost + $request->shipping_cost;
        $order->status_order = 'รอชำระเงิน';
        $order->update($request->all());
        NotificationModel::create([
            'user_id' => $order->id_employer,
            'message' => 'Freelance '.$order->photographer->username.' ได้รับงานของคุณ ',
        ]);
        event(new TriggerNotification($order->id_employer));
        Notification::route('mail', $order->employer->email)
            ->notify(new OrderFreelanceAcceptEmail($order->photographer));
        return redirect('invoiceSuccess');
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
    public function createStep1($username, Request $request)
    {
        $order = $request->session()->get('order');
        $user = User::whereUsername($username)->first();
        $package_cards = PackageCard::where('id_user', $user->id)->groupBy('id_category')->get();

        // dd($package_cards);
        return view('/orderstep1', compact('order', $order, 'user', 'package_cards'))->with('username', $username);
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep1($username, Request $request)
    {
        $user = User::whereUsername($username)->first();

        $validatedData = $request->validate([
            'id_category' => 'required',
        ]);

        if (empty($request->session()->get('order'))) {
            $order = new Order();
            $order->fill($validatedData);
            $request->session()->put('order', $order);
            $order->id_category = $request->id_category;
            $order->id_photographer = $user->id;
            // dd($request->id_category);
        } else {
            $order = $request->session()->get('order');
            $order->fill($validatedData);
            $request->session()->put('order', $order);
            $order->id_category = $request->id_category;
            $order->id_photographer = $user->id;
            // dd($order->id_category);
        }

        return redirect($username.'/order/step2')->with('username', $username);

    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2($username, Request $request)
    {
        $order = $request->session()->get('order');
        $user = User::whereUsername($username)->first();
        $package_cards = PackageCard::Where([
            ['id_category', 'LIKE', $order->id_category],
            ['id_user', 'LIKE', $order->id_photographer],
        ])->orderBy('id_formattime', 'ASC')->get();
        // dd($package_cards);
        // print_r('category : '.$order->id_category.'<br>');
        // print_r('id_photographer : '.$order->id_photographer);

        return view('/orderstep2', compact('order', $order, 'package_cards', 'user'))->with('username', $username);
    }
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep2($username, Request $request)
    {
        $validatedData = $request->validate([
            'id_formattime' => 'required',
            'price' => 'required',
            'detail' => 'required',
        ]);
        $order = $request->session()->get('order');
        $request->session()->put('order', $order);
        $order->id_formattime = $request->id_formattime;
        $order->price = $request->price;
        $order->detail = $request->detail;

        // if($order->id_formattime == '3'){
        return redirect($username.'/order/step3')->with('username', $username);
        // }

    }
    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3($username, Request $request)
    {
        $order = $request->session()->get('order');
        $user = User::whereUsername($username)->first();
        // print_r('category : '.$order->id_category.'<br>');
        // print_r('id_photographer : '.$order->id_photographer.'<br>');
        // print_r('id_formattime : '.$order->id_formattime.'<br>');
        // print_r('price : '.$order->price.'<br>');
        // print_r('time_work : '.$order->time_work.'<br>');
        return view('/orderstep3', compact('order', $order, 'package_cards', 'user'))->with('username', $username);

        // $order = $request->session()->get('order');
        // $user = User::whereUsername($username)->first();
        // // print_r('category : '.$order->id_category.'<br>');
        // // print_r('id_photographer : '.$order->id_photographer.'<br>');
        // // print_r('id_formattime : '.$order->id_formattime.'<br>');
        // // print_r('price : '.$order->price.'<br>');
        // if ($order->id_formattime == '3') {
        //     // print_r($order->id_formattime);
        //     return view('/orderstep3-fm3', compact('order', $order, 'package_cards', 'user'))->with('username', $username);
        // } else {
        //     // print_r($order->id_formattime);
        //     return view('/orderstep3-fm12', compact('order', $order, 'package_cards', 'user'))->with('username', $username);
        // }
    }
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep3($username, Request $request)
    {

        $validatedData = $request->validate([
            'date_work' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        $order = $request->session()->get('order');
        $request->session()->put('order', $order);
        $order->date_work = $request->date_work;
        $order->start_time = $request->start_time;
        $order->end_time = $request->end_time;
        return redirect($username.'/order/step4')->with('username', $username);

        // $validatedData = $request->validate([
        //     'time_work' => 'required',
        // ]);
        // $order = $request->session()->get('order');
        // $request->session()->put('order', $order);
        // $order->time_work = $request->time_work;
        // return redirect($username.'/order/step4')->with('username', $username);

    }
    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    // public function createStep4($username, Request $request)
    // {

    //     $order = $request->session()->get('order');
    //     $user = User::whereUsername($username)->first();
    //     // print_r('category : '.$order->id_category.'<br>');
    //     // print_r('id_photographer : '.$order->id_photographer.'<br>');
    //     // print_r('id_formattime : '.$order->id_formattime.'<br>');
    //     // print_r('price : '.$order->price.'<br>');
    //     if ($order->id_formattime == '3') {
    //         // print_r($order->id_formattime);
    //         return view('/orderstep3-fm3', compact('order', $order, 'package_cards', 'user'))->with('username', $username);
    //     } else {
    //         // print_r($order->id_formattime);
    //         return view('/orderstep3-fm12', compact('order', $order, 'package_cards', 'user'))->with('username', $username);
    //     }

    //     // $order = $request->session()->get('order');
    //     // $user = User::whereUsername($username)->first();
    //     // // print_r('category : '.$order->id_category.'<br>');
    //     // // print_r('id_photographer : '.$order->id_photographer.'<br>');
    //     // // print_r('id_formattime : '.$order->id_formattime.'<br>');
    //     // // print_r('price : '.$order->price.'<br>');
    //     // // print_r('time_work : '.$order->time_work.'<br>');
    //     // return view('/orderstep4', compact('order', $order, 'package_cards', 'user'))->with('username', $username);

    // }
    // /**
    //  * Post Request to store step1 info in session
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function postCreateStep4($username, Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'time_work' => 'required',
    //     ]);
    //     $order = $request->session()->get('order');
    //     $request->session()->put('order', $order);
    //     $order->time_work = $request->time_work;
    //     return redirect($username.'/order/step5')->with('username', $username);

    //     // $validatedData = $request->validate([
    //     //     'date_work' => 'required',
    //     // ]);
    //     // $order = $request->session()->get('order');
    //     // $request->session()->put('order', $order);
    //     // $order->date_work = $request->date_work;
    //     // return redirect($username.'/order/step5')->with('username', $username);

    // }
    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep4($username, Request $request)
    {
        $order = $request->session()->get('order');
        $user = User::whereUsername($username)->first();
        // print_r('category : '.$order->id_category.'<br>');
        // print_r('id_photographer : '.$order->id_photographer.'<br>');
        // print_r('id_formattime : '.$order->id_formattime.'<br>');
        // print_r('price : '.$order->price.'<br>');
        // print_r('time_work : '.$order->time_work.'<br>');
        // print_r('date_work : '.$order->date_work.'<br>');
        return view('/orderstep4', compact('order', $order, 'package_cards', 'user'))->with('username', $username);
    }
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep4($username, Request $request)
    {
        $validatedData = $request->validate([
            'place_id' => 'required|string',
            'place_name' => 'required|string',
            'lat' => 'required|string',
            'lng' => 'required|string',
            'address' => 'required|string',
            'url' => 'required|string',
        ]);

        $order = $request->session()->get('order');
        $request->session()->put('order', $order);
        $order->place = $request->only([
            'place_id',
            'place_name',
            'lat',
            'lng',
            'address',
            'url',
        ]);
        return redirect($username.'/order/step5')->with('username', $username);

    }

    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep5($username, Request $request)
    {
        $order = $request->session()->get('order');
        // dd($order);
        $user = User::whereUsername($username)->first();
        // dd($order->id_category);
        // dd($order->id_formattime);
        // dd($order->time_work);
        // dd($order->date_work);
        // dd($order->place);
        return view('/orderstep5', compact('order', $order, 'package_cards', 'user'))->with('username', $username);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(json_decode($request->place));
        // json_decode($request->place) store google map data like
        // 'place_id' รหัสสถานที่
        // 'place_name' ชื่อสถานที่
        // 'lat' ละติจูด
        // 'lng' ลองติจูด
        // 'address' ชื่อที่อยู่
        // 'url' ลิงก์สำหรับกดไป google map ถ้าเข้าผ่านมือถือจะลิงก์เข้า app google map ทันที
        // สามารถ edit migration orders แล้วเก็บข้อมูลพวกนี้แยก field แทน field place ได้เลยครับ

        // $order = Order::create($request->all());
        $user = Auth::user();
        $photographer = User::find($request->id_photographer);
        $place = json_decode($request->place);
        $order = new Order;
        $order->price = $request->price;
        $order->detail = $request->detail;
        $order->date_work = $request->date_work;
        $order->start_time = $request->start_time;
        $order->end_time = $request->end_time;
        $order->id_category = $request->id_category;
        $order->id_formattime = $request->id_formattime;
        $order->id_employer = $user->id;
        $order->id_photographer = $request->id_photographer;
        $order->status_order = 'รอการตอบรับ';
        $order->status_payment = 'ยังไม่ชำระเงิน';
        $order->total = $order->price;
        $order->place_id = $place->place_id;
        $order->place_name = $place->place_name;
        $order->lat = $place->lat;
        $order->lng = $place->lng;
        $order->address = $place->address;
        $order->url = $place->url;
        $order->save();
        NotificationModel::create([
            'user_id' => $order->id_photographer,
            'message' => 'คุณได้รับงานใหม่จาก '.$user->username,
        ]);
        event(new TriggerNotification($order->id_photographer));
        Notification::route('mail', $photographer->email)
            ->notify(new OrderCreatedEmail($user));
        return redirect('order/'.$order->id.'/createsuccess');
    }

    public function createsuccess($id,Request $request){
        $order = Order::find($id);
        $user = User::findOrFail($order->id_photographer);
        // dd($user);
        return view('createOrderSuccess', compact('order', 'user'));
    }

    public function __construct()
    {

        $this->middleware('auth');

    }

}
