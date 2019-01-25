@extends('layouts.mainmenu_p')
@section('page_title', 'Notification')
@section('content')

        <div class="row" style="margin:10px auto;">
            <div class="col-12" style="font-size:10px; background:#37ECBA30; padding-top:15px; margin: 0px auto; border-radius:10px; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                <div class="row">
                    <div class="col-12" >
                        <span style="font-size:10px;">วันนี้</span><br>
                        <span style="font-size:14px;">Username ตอบรับออเดอร์ว่าจ้างของคุณแล้ว</span>
                    </div>
                    <div class="col-12" style="text-align:center;">
                        <button class="btn_color" onclick="window.location.href='/listpayment'">ชำระเงิน</button>
                    </div>
            </div>
            </div>
        </div>
        <div class="row" style="margin:10px auto;">
            <div class="col-12" style="font-size:10px; background: #fff; padding-top:15px;margin: 0px auto; border-radius:10px; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                <div class="row">
                    <div class="col-12" >
                        <span style="font-size:10px;">วันนี้</span><br>
                        <span style="font-size:14px;">คุณได้ส่งคำขอจ้างงาน Username</span>
                    </div>
                    <div class="col-12" style="text-align:center;">
                        <button class="btn_color" style="background:#72AFD3;">รายละเอียด</button>
                    </div>
            </div>
            </div>
        </div>
 
@stop
