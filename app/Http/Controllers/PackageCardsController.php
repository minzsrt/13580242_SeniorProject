<?php

namespace App\Http\Controllers;

use App\PackageCard; 
use App\Categoly; 
use App\Format_time; 
use App\User; 
use Illuminate\Http\Request;
// use Request;
use Auth;
use App\Http\Requests\PackageCardRequest;
use Illuminate\Support\Str;

class PackageCardsController extends Controller
{
    public function index($username,$id){

        // print_r($username.'<br>');
        // print_r($id.'<br>');
        $user = User::whereUsername($username)->first();
        // dd($user);
        $id_user = $user->id;
        // print_r('id_user : '.$id_user.'<br>');
        $package_cards = PackageCard::Where([
            ['id_category','LIKE', $id ],
            ['id_user', 'LIKE', $id_user ],
        ])->orderBy('price', 'ASC')->get();
        // dd($package_cards);
        if($package_cards->isEmpty()){
            abort(404);
        }

        // if( url()->previous() == url('/createPackageCardSuccess')){
        //     $id_user = Auth::user()->id;
        //     $package_cards = PackageCard::Where([
        //         ['id_category','LIKE', $id ],
        //         ['id_user', 'LIKE', $id_user ],
        //     ])->orderBy('price', 'ASC')->get();
        // }else{
        //     $url = url()->previous();
        //     $username = Str::after($url , 'http://127.0.0.1:8000/profile/');
        //     $user = User::whereUsername($username)->first();
        //     // dd($user);
        //     // $id_user = Auth::user()->id;
        //     $id_user = $user->id;
        //     // dd($id_user);
        //     $package_cards = PackageCard::Where([
        //         ['id_category','LIKE', $id ],
        //         ['id_user', 'LIKE', $id_user ],
        //     ])->orderBy('price', 'ASC')->get();
        // }
    
        // dd($package_cards);
        $categories = \App\Category::all();
        $formattimes = \App\Format_time::all();
        
        if($id == '1'){
            $data['head_category'] = 'รับปริญญา';
            $data['get_id'] = '1';
        }elseif($id == '2'){
            $data['head_category'] = 'ภาพบุคคล/แฟชั่น';
            $data['get_id'] = '2';
        }elseif($id == '3'){
            $data['head_category'] = 'งานแต่งงาน';
            $data['get_id'] = '3';
        }elseif($id == '4'){
            $data['head_category'] = 'พรีเวดดิ้ง';
            $data['get_id'] = '4';
        }elseif($id == '5'){
            $data['head_category'] = 'งานอีเวนต์';
            $data['get_id'] = '5';
        }elseif($id == '6'){
            $data['head_category'] = 'สถาปัตยกรรม';
            $data['get_id'] = '6';
        }elseif($id == '7'){
            $data['head_category'] = 'สินค้า/อาหาร';
            $data['get_id'] = '7';
        }

        $data['username'] = $username;

        return view('photographer.packages.listPackage',$data, compact('package_cards','categories','formattimes'));
    }


    public function show($id){
        $package_card = PackageCard::find($id);
        if(empty($package_card))
        abort(404);
        return view('photographer.show', compact('package_card')); 
    }

    public function createPackagecardCategory(Request $request){
        $package_card = $request->session()->get('package_card');
        $categories = \App\Category::all();
        return view('photographer.packages.createPackagecardCategory',compact('package_card', $package_card,'categories'));
    }

    public function postPackagecardCategory(Request $request)
    {
        $validatedData = $request->validate([
            'id_category' => 'required',
        ]);

        if(empty($request->session()->get('package_card'))){
            $package_card = new PackageCard();
            $package_card->fill($validatedData);
            $request->session()->put('package_card', $package_card);
        }else{
            $package_card = $request->session()->get('package_card');
            $package_card->fill($validatedData);
            $request->session()->put('package_card', $package_card);
            $package_card->id_category = $request->id_category;
            // console.log($package_card->id_category);
        }
        
        return redirect('/createPackageCard');

    }
    
    public function create(Request $request){
        $package_card = $request->session()->get('package_card');

        $formattime = Format_time::pluck('name_format_time','id');

        if($package_card->id_category == '1'){
            $data['head_category'] = 'รับปริญญา';
            // dd($data);
        }elseif($package_card->id_category == '2'){
            $data['head_category'] = 'ภาพบุคคล/แฟชั่น';
            // dd($data);
        }elseif($package_card->id_category == '3'){
            $data['head_category'] = 'งานแต่งงาน';
        }elseif($package_card->id_category == '4'){
            $data['head_category'] = 'พรีเวดดิ้ง';
        }elseif($package_card->id_category == '5'){
            $data['head_category'] = 'งานอีเวนต์';
        }elseif($package_card->id_category == '6'){
            $data['head_category'] = 'สถาปัตยกรรม';
        }elseif($package_card->id_category == '7'){
            $data['head_category'] = 'สินค้า/อาหาร';
        }
        return view('photographer.packages.createPackageCard',$data,compact('package_card',$package_card,'formattime'));
    }
    
    public function store(Request $request){
        $package_card = PackageCard::create($request->all());
        $package_card->id_user = Auth::user()->id;
        $package_card->save();
        return redirect('createPackageCardSuccess');  
    }

    public function success(Request $request){
        $package_card = $request->session()->get('package_card');
        $data['get_id'] = $package_card->id_category;        
        return view('createPackageCardSuccess',$data);
    }

    public function edit($username,$idcategory,$id){
        // print_r('username : ' . $username . '<br>');
        // print_r('idcategory : ' . $idcategory . '<br>');
        // print_r('id : ' . $id . '<br>');
        $package_card = PackageCard::find($id);
        
        if(Auth::user()->username == $package_card->user->username){
            $formattime = Format_time::pluck('name_format_time','id');
            // dd($package_card);
            if(empty($package_card))
            abort(404);
            $data['username'] = $username;
            return view('photographer.packages.edit',$data, compact('package_card','formattime'));
        }else{
            abort(404);     
        }
       
    }

    public function update($username,$idcategory,$id, PackageCardRequest $request){
        // print_r('username : ' . $username . '<br>');
        // print_r('idcategory : ' . $idcategory . '<br>');
        // print_r('id : ' . $id . '<br>');
        $package_card = PackageCard::findOrFail($id); 
        $package_card->update($request->all());
        return redirect('/profile/'.$username.'/listPackage/'.$package_card->id_category)->with('alertedit', 'edit your package success!');
    }

    public function destroy($username,$idcategory,$id){
        
        $user = User::whereUsername($username)->first();
        $id_user = $user->id;
        $package_cards = PackageCard::Where([
            ['id_category','LIKE', $idcategory ],
            ['id_user', 'LIKE', $id_user ],
        ])->get();
        $check = $package_cards->count();
        $package_card = PackageCard::findOrFail($id);
        $package_card->delete();
        
        if( $check == '1'){
            return redirect('/profile/'.$username);
        }else{
		    return redirect('/profile/'.$username.'/listPackage/'.$idcategory)->with('alertdelete', 'Delete your package success!');
        }
	}

}
