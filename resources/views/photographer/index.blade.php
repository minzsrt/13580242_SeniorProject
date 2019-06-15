@extends('layouts.mainmenu_p')
@section('page_title', 'Index')
@section('content')

<div class="container">
    
    @if( $verify->id_status == '4' || $verify->id_status == '3')
    <div class="row">
        <div class="col">
            <label onclick="window.location.href='{{url('verify/'.Auth::user()->username)}}'" class="container_radio bg_fff" style="height:60px; margin-top:20px; padding-left:20px;">
                    <div class="row">
                        <div class="col-2" style="padding-top: 10px;">
                            <div class="iconalert">
                                <img src="{{url('assets/image/info.svg')}}">
                            </div>
                        </div>
                        <div class="col" style="padding: 10px 0;">
                        โปรดยืนยันตัวตนเพื่อให้บัญชีของคุณให้สมบูรณ์
                        </div>
                    </div>
            </label>
        </div>
    </div>
    @elseif($verify->id_status == '1')
    <div class="row">
        <div class="col">
            <label onclick="window.location.href='{{url('verify/'.Auth::user()->username)}}'" class="container_radio bg_fff" style="height:60px; margin-top:20px; padding-left:20px;">
                    <div class="row">
                        <div class="col-2" style="padding-top: 10px;">
                            <div class="iconalert">
                                <img src="{{url('assets/image/info.svg')}}">
                            </div>
                        </div>
                        <div class="col" style="padding: 10px 0;">
                        กำลังดำเนินการตรวจสอบยืนยันตัวตนของคุณ
                        </div>
                    </div>
            </label>
        </div>
    </div>
    @else

    @endif

    <div class="row">
        <div class="col">
            <label onclick="window.location.href='{{url('credits/'.Auth::user()->username)}}'" class="container_radio" style="height:60px; background:#37ECBA; margin-top:20px; padding-left:20px;">
                    <div class="row">
                        <div class="col" style="padding-top: 10px;">
                        กระเป๋าตังช่างภาพ
                        </div>
                        <div class="col text_right" style="padding-top: 10px;">
                                @if(!empty($deposit)) 
                                <h3 class="listtag_price">{{number_format($deposit->total)}} ฿</h3>
                                @else
                                    <h3 class="listtag_price">0 ฿</h3>
                                @endif
                        </div>
                    </div>
            </label>
        </div>
    </div>
    @if ( $orders->count() != 0 )

    <div class="row">
        <div class="col-12">
        <h3 class="headder_text">คิวงานวันนี้</h3>
        </div>
        <div class="col">
            @foreach ($orders as $order)
                @if(date('Ymd') == date('Ymd', strtotime($order->date_work)))
                <div class="container radius10 shadowbox bg_color_gradient_opacity2 pad10">
                    <div class="row">
                        <div class="col-2 text-center bg_color_gradient_opacity color_72AFD3 shadownone radius10 marginnone">
                        {{ date("j M", strtotime($order->date_work) )}}
                        </div>
                        <div class="col-10">
                            รับปริญญา<br>
                            <span class="all_more_link color_72AFD3">{{ $order->employer->username }}</span>
                        </div>
                    </div>
                </div>
                @else
                <div class="container radius10 shadowbox bg_color_gradient_opacity2 pad10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="messageicon margin_auto">
                            <img src="{{url('assets/image/calendar.svg')}}">
                        </div>
                    </div>
                    <div class="col-md-12 text_center">
                        <span class="all_more_link">ไม่มีคิวงานวันนี้</span> 
                    </div>
                </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="row margin_top10">
        <div class="col-12">
        <h3 class="headder_text">คิวงานใกล้จะถึง</h3>
        </div>
        <div class="col-12">
            @foreach ($orders as $order)
            @if(date('Ymd') < date('Ymd', strtotime($order->date_work)))
            <div class="container radius10 shadowbox bg_color_gradient_opacity2 pad10">
                <div class="row">
                    <div class="col-2 text-center bg_color_gradient_opacity color_72AFD3 shadownone radius10 marginnone">
                    {{ date("j M", strtotime($order->date_work) )}}
                    </div>
                    <div class="col-10">
                        รับปริญญา<br>
                        <span class="all_more_link color_72AFD3">{{ $order->employer->username }}</span>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-12">
                <div class="container radius10 shadowbox bg_color_gradient_opacity2 pad10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="messageicon margin_auto">
                            <img src="{{url('assets/image/calendar.svg')}}">
                        </div>
                    </div>
                    <div class="col-md-12 text_center">
                        <span class="all_more_link">ไม่มีคิวงานใกล้จะถึง</span> 
                    </div>
                </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    @else
    <div class="row">
        <div class="col-12">
        <h3 class="headder_text">คิวงานวันนี้</h3>
        </div>
        <div class="col">
                <div class="container radius10 shadowbox bg_color_gradient_opacity2 pad10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="messageicon margin_auto">
                            <img src="{{url('assets/image/calendar.svg')}}">
                        </div>
                    </div>
                    <div class="col-md-12 text_center">
                        <span class="all_more_link">ไม่มีคิวงานวันนี้</span> 
                    </div>
                </div>
                </div>
        </div>
    </div>

    <div class="row margin_top10">
        <div class="col-md-12">
        <h3 class="headder_text">คิวงานใกล้จะถึง</h3>
        </div>
        <div class="col-md-12">
                <div class="container radius10 shadowbox bg_color_gradient_opacity2 pad10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="messageicon margin_auto">
                            <img src="{{url('assets/image/calendar.svg')}}">
                        </div>
                    </div>
                    <div class="col-md-12 text_center">
                        <span class="all_more_link">ไม่มีคิวงานใกล้จะถึง</span> 
                    </div>
                </div>
                </div>
        </div>
    </div>
    @endif
</div>
@stop
