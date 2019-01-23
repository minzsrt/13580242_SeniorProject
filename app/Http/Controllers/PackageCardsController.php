<?php

namespace App\Http\Controllers;

use App\PackageCard; 
use Request;
use App\Http\Requests\PackageCardRequest;

class PackageCardsController extends Controller
{
    public function index(){
        $package_cards = PackageCard::all();
        return view('photographer.packages.listPackage', compact('package_cards'));
    }

    public function create(){
        return view('photographer.packages.createPackageCard');
    }
    
    public function store(PackageCardRequest $request){
        PackageCard::create($request->all());
        return redirect('createPackageCardSuccess');  
    }
}
