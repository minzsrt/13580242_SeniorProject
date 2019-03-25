<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Format_time;
use App\Events\TriggerNotification;
use App\Http\Requests\AlbumRequest;
use App\ImageAlbum;
use App\Notification as NotificationModel;
use App\Notifications\OrderCreatedEmail;
use App\Order;
use App\Photographer;
use App\DepositAccount;
use App\Bank;
use App\VerifyCard;
use App\Statusverify;

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

class AdminController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::all()->count();
        // return view('admin.index',compact('user'));

            $order = Order::Where('id_employer', '3')->count();
            dd($order);
            // return view('admin.users.show', compact('user','order','dataptg','dpsaccount'));        
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

    public function orderlist(){
        $orders = Order::paginate(20);
        return view('admin.orders.orders', compact('orders'));         
    }

    public function ordershow($id){
        $order = Order::findOrFail($id);
        return view('admin.orders.show', compact('order'));        
    }

    public function usergenerallist(){
        $users = User::Where('role_id', '3')->paginate(20);
        return view('admin.users.usersgeneral', compact('users'));        
    }

    public function usergeneralshow($id){

        $user = User::findOrFail($id);

        if($user->role_id == '3'){
            $order = Order::Where('id_employer', $id)->count();
            return view('admin.users.show', compact('user','order','dataptg','dpsaccount'));        
        }
        else{
            abort(404);           
        }

    }

    public function userphotographerlist(){
        $users = User::Where('role_id', '2')->paginate(20);
        return view('admin.users.usersphotographer', compact('users'));        
    }

    public function userphotographershow($id){

        $user = User::findOrFail($id);

        if($user->role_id == '2'){
            $order = Order::Where('id_photographer', $id)->count();
            $dataptg = Photographer::Where('id_user', $id)->first();
            $verify = VerifyCard::where('id_user',$id)->first();   
            $dpsaccount = DepositAccount::Where('id_photographer', $id)->first();

            if(empty($dataptg)){
                abort(404);           
            }

            return view('admin.users.show_p', compact('user','order','dataptg','dpsaccount','verify'));        
        }
        else{
            abort(404);           
        }

    }

    public function categorylist(){
        $categories = Category::paginate(20);
        return view('admin.categories.categories', compact('categories'));        
        
    }

    public function categorypost(Request $request){
        Category::create($request->all());
        return redirect('admin/categories')->with('alertpost', 'เพิ่มประเภทงาน '.$request->name_category.' สำเร็จ!');  
    }

    public function categoryupdate($id, Request $request){
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect('admin/categories')->with('alertedit', 'แก้ไขประเภทงาน '.$category->name_category.' สำเร็จ!');   
    }

    public function categorydestroy($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('admin/categories')->with('alertdelete', 'ลบประเภทงาน '.$category->name_category.' สำเร็จ!');   
    }

    public function formattimelist(){
        $formattimes = Format_time::paginate(20);
        return view('admin.formattime.formattime', compact('formattimes'));        
        
    }

    public function formattimepost(Request $request){
        Format_time::create($request->all());
        return redirect('admin/formattime')->with('alertpost', 'เพิ่มรูปแบบเวลา '.$request->name_format_time.' สำเร็จ!');  
    }

    public function formattimeupdate($id, Request $request){
        $formattime = Format_time::findOrFail($id);
        $formattime->update($request->all());
        return redirect('admin/formattime')->with('alertedit', 'แก้ไขรูปแบบเวลา '.$formattime->name_format_time.' สำเร็จ!');  
    }

    public function formattimedestroy($id){
        $formattime = Format_time::findOrFail($id);
        $formattime->delete();
        return redirect('admin/formattime')->with('alertdelete', 'ลบรูปแบบเวลา '.$formattime->name_format_time.' สำเร็จ!');  
    }

    public function banklist(){
        $banks = Bank::paginate(20);
        return view('admin.banks.banks', compact('banks'));        
        
    }

    public function bankpost(Request $request){
        Bank::create($request->all());
        return redirect('admin/banks')->with('alertpost', 'เพิ่มธนาคาร '.$request->name_bank.' สำเร็จ!');  
    }

    public function bankupdate($id, Request $request){
        $bank = Bank::findOrFail($id);
        $bank->update($request->all());
        return redirect('admin/banks')->with('alertedit', 'แก้ไขธนาคาร '.$bank->name_bank.' สำเร็จ!');  
    }

    public function bankdestroy($id){
        $bank = Bank::findOrFail($id);
        $bank->delete();
        return redirect('admin/banks')->with('alertdelete', 'ลบธนาคาร '.$bank->name_bank.' สำเร็จ!');  
    }

    public function verifylist(){
        $verifylist = VerifyCard::orderBy('updated_at', 'desc')->paginate(20);
        $statusverify = Statusverify::pluck('status_verify','id');
        $photographers = Photographer::all();
        return view('admin.verify.verify', compact('verifylist','statusverify','photographers'));        
        
    }

    public function verifyupdate($id, Request $request){

        $statusverify = VerifyCard::findOrFail($id);
        $statusverify->update($request->all());
        $photographer = User::select('username')->where('id',$statusverify->id_user)->first();

        return redirect('admin/verify')->with('alertedit', 'อัปเดตสถานะยืนยันตัวตน '.$photographer->username.' สำเร็จ!');  
    }
    
}
