<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Http\Requests\AlbumRequest;
use App\ImageAlbum;
use App\Notification;
use App\Order;
use App\PackageCard;
// use Request;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
use Storage;

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

        if (Auth::user()->role_id == '2') {
            $orders = Order::where('id_photographer', 'Like', $user->id)->get();
            foreach ($orders as $order) {
                $employer = User::where('id', 'like', $order->id_employer)->get();
            }
            return view('photographer.notifications.notification', compact('user', 'orders', 'employer'))->with('username', $username);
        } else {
            $orders = Order::where('id_employer', 'Like', $user->id)->get();
            foreach ($orders as $order) {
                $photographer = User::where('id', 'like', $order->id_photographer)->get();
            }
            // dd($orders);
            return view('general.notification', compact('user', 'orders', 'photographer'))->with('username', $username);
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

    public function clearNoti()
    {
        Notification::where('user_id', Auth::id())
            ->where('status', 0)
            ->update([
                'status' => 1,
            ]);

        return response()->json(null, 204);
    }
}
