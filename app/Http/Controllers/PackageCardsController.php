<?php

namespace App\Http\Controllers;

use App\PackageCard; 
use App\Categoly; 
use App\Format_time; 
use Request;
use Auth;
use App\Http\Requests\PackageCardRequest;

class PackageCardsController extends Controller
{
    public function index(){
        $package_cards = PackageCard::orderBy('price', 'ASC')->get();
        $categories = \App\Category::all();
        $formattimes = \App\Format_time::all();
        return view('photographer.packages.listPackage', compact('package_cards','categories','formattimes'));
    }


    public function show($id){
        $package_card = PackageCard::find($id);
        if(empty($package_card))
        abort(404);
        return view('photographer.show', compact('package_card')); 
    }

    public function create(){
        return view('photographer.packages.createPackageCard');
    }
    
    public function store(PackageCardRequest $request){
        $package_card = PackageCard::create($request->all());
        $package_card->id_user = Auth::user()->id;
        $package_card->save();
        return redirect('createPackageCardSuccess');  
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
