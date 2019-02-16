<?php

namespace App\Http\Controllers;

use App\PackageCard; 
use App\Categoly; 
use App\Format_time; 
use Illuminate\Http\Request;
// use Request;
use Auth;
use App\Http\Requests\PackageCardRequest;

class PackageCardsController extends Controller
{
    public function index( $id ){
        $id_user = Auth::user()->id;
        $package_cards = PackageCard::Where([
            ['id_category','LIKE', $id ],
            ['id_user', 'LIKE', $id_user ],
        ])->orderBy('price', 'ASC')->get();
        // dd($package_cards);
        if(empty($package_cards))
        abort(404);
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
        return view('photographer.packages.createPackageCard',$data,compact('package_card',$package_card));
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

    public function edit($id){
        $package_card = PackageCard::find($id);
        if(empty($package_card))
        abort(404);
        return view('photographer.packages.edit', compact('package_card'));
    }

    public function update($id, PackageCardRequest $request){
        $package_card = PackageCard::findOrFail($id); 
        $package_card->update($request->all());
        return redirect('listPackage');
    }

    public function destroy($id){
		$package_card = PackageCard::findOrFail($id);
		$package_card->delete();
		return redirect('listPackage');
	}

}
