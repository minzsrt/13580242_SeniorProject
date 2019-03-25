<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use App\DepositAccount; 
use App\Bank; 
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AlbumRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;

class DepositAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($username)
    {
        $user = User::whereUsername($username)->first();
        $deposit = DepositAccount::where('id_photographer','LIKE',$user->id)->first();
        // dd($deposit);
        return view('photographer.credit.credits',compact('user','deposit'))->with('username',$username);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($username)
    {
        $banks = Bank::all();
        return view('photographer.credit.create',compact('banks'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($username,Request $request)
    {
        $deposit_account = DepositAccount::create($request->all());
        if($request->hasFile('book_bank_copy')){
    		$book_bank_copy = $request->file('book_bank_copy');
            $filename = $book_bank_copy->store('bookbank', ['disk' => 'profile_files']);
    		$deposit_account->book_bank_copy = $filename;
    		$deposit_account->save();
        }
        $deposit_account->save();
        return redirect('credits/'.$username)->with('alertpost', 'เพิ่มข้อมูลบัญชีและการเงินสำเร็จ!');  

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
    public function edit($username)
    {
        $user = User::whereUsername($username)->first();
        $credit = DepositAccount::where('id_photographer',$user->id)->first();
        $banks = Bank::pluck('name_bank','id');
        return view('photographer.credit.edit',compact('credit','banks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($username , Request $request)
    {
        $user = User::whereUsername($username)->first();
        $credit = DepositAccount::where('id_photographer',$user->id)->first();   
        
        $credit->fill([
            'deposit_account_number' => $request->deposit_account_number,
            'id_bank' => $request->id_bank,
            'id_photographer' => $request->id_photographer
        ]);

        if($request->hasFile('book_bank_copy')){
            $book_bank_copy = $request->file('book_bank_copy');
            $filename = $book_bank_copy->store('bookbank', ['disk' => 'profile_files']);
            $credit->book_bank_copy = $filename;
            $credit->save();
        }
        
        $credit->save();        
        return redirect('credits/'.$username)->with('alertedit', 'แก้ไขข้อมูลบัญชีและการเงินสำเร็จ!');  

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
