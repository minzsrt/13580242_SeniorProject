<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Http\Requests\AlbumRequest;
use App\ImageAlbum;
use App\PackageCard;
use App\User;
use App\Order;
use App\Review;
use Auth;
use DB;
use Illuminate\Support\Str;
use Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function show($username)
    {
        $user = User::whereUsername($username)->first();
        if (!$user) {
            return abort(404);
        }
        $data['username'] = $username;

        if (Auth::check() && $user) {

            $authcheck = Auth::user()->username;

            if ($user->username == $authcheck) {
                if ($user && $user->role_id == 2) {

                    $albums = Album::orderBy('id', 'DESC')->get();

                    $package_cards = PackageCard::select('id_category','price')->where('id_user', $user->id)->groupBy('id_category')->get();
                    
                    // $package_cards = PackageCard::where('id_user', $user->id)->get();

                    $reviews = Review::where('id_photographer', $user->id)->get();

                    $categories = Category::all();
                    $image_albums = ImageAlbum::all();
                    return view('photographer.profile', $data, compact('albums', 'package_cards', 'categories', 'image_albums','reviews'))->withUser($user);

                } elseif ($user && $user->role_id == 3) {
                    return view('general.profile', $data)->withUser($user);

                }
            } elseif ($user->username != $authcheck) {
                if ($user->role_id == 2) {

                    $albums = Album::orderBy('id', 'DESC')->get();
                    $category_albums = Album::groupBy('id_category')->get();
                    // dd($category_albums);
                    $package_cards = PackageCard::Where('id_user', $user->id)->groupBy('id_category')->get();

                    if (empty($package_cards)) {
                        abort(404);
                    }

                    $image_albums = ImageAlbum::all();
                    $categories = Category::all();
                    $reviews = Review::where('id_photographer', $user->id)->get();

                    return view('general.viewphotographer', $data, compact('albums','category_albums', 'package_cards', 'categories', 'image_albums','reviews'))->withUser($user);

                } elseif ($user && $user->role_id == 3) {

                    return view('general.viewgeneral', $data)->withUser($user);

                }
            }
        } else {

            if ($user) {
                if ($user->role_id == 2) {
                    $authall = User::where('username', 'Like', $user->username)->get();
                    // dd($authall->pluck('id'));

                    $id_user = $authall->pluck('id');
                    // dd($id_user);

                    $albums = Album::orderBy('id', 'DESC')->get();
                    $category_albums = Album::groupBy('id_category')->get();
                    $package_cards = PackageCard::Where('id_user', 'LIKE', $id_user)->groupBy('id_category')->get();
                    // dd($package_cards);
                    if (empty($package_cards)) {
                        abort(404);
                    }

                    $image_albums = ImageAlbum::all();
                    $categories = Category::all();

                    $reviews = Review::where('id_photographer', $user->id)->get();

                    return view('general.viewphotographer', $data, compact('albums','category_albums', 'package_cards', 'categories', 'image_albums','reviews'))->withUser($user);

                } elseif ($user && $user->role_id == 3) {

                    return view('general.viewgeneral', $data)->withUser($user);

                } else {
                    abort(404);
                    // return $username;
                }

            } else {
                abort(404);
                // return $username;
            }

        }
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

    // public function __construct(){

    //     $this->middleware('auth');

    //  }
}
