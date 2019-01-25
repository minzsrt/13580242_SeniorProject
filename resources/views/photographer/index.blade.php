@extends('layouts.mainmenu_p')
@section('page_title', 'Index')
@section('content')

    <div class="row">
        <div class="col">
            <label onclick="window.location.href='/yourBank'" class="container_radio" style="height:60px; background:#37ECBA; margin-top:20px; padding-left:20px;">
                    <div class="row">
                        <div class="col" style="padding-top: 10px;">
                        กระเป๋าตังช่างภาพ
                        </div>
                        <div class="col text_right" style="padding-top: 10px;">
                            <h3  style="font-size:14px; padding-right:20px;">600.00 ฿</h3>
                        </div>
                    </div>
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
        <h3 class="headder_text">คิวงานวันนี้</h3>
        </div>
        <div class="col">
            <label class="container_radio" style="height:60px; margin-top:10px; padding-left:20px;">
                    <div class="row">
                        <div class="col text_center" style="padding-top: 10px;">
                        ไม่มี
                        </div>
                    </div>
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
        <h3 class="headder_text">คิวงานใกล้จะถึง</h3>
        </div>
        <div class="col-12">
            <label class="container_radio" style="height:auto; margin-top:10px; padding:10px;">
                    <div class="row">
                        <div class="col-2 text-center" style="padding-top: 10px; border-right:1px solid #a3a3a3;">
                            27<br>
                            JAN
                        </div>
                        <div class="col" style="padding-top: 10px;">
                            รับปริญญา<br>
                            <span class="all_more_link">Username</span>
                        </div>
                    </div>
            </label>
        </div>
        <div class="col-12">
            <label class="container_radio" style="height:auto; margin-top:5px; padding:10px;">
                    <div class="row">
                        <div class="col-2 text-center" style="padding-top: 5px; border-right:1px solid #a3a3a3;">
                            31<br>
                            JAN
                        </div>
                        <div class="col" style="padding-top: 10px;">
                            รับปริญญา<br>
                            <span class="all_more_link">Username</span>
                        </div>
                    </div>
            </label>
        </div>
    </div>

@stop
