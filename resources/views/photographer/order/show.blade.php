@extends('layouts.mainprofile')
@section('page_title', 'Show')
@section('link_back', '/notification/'.Auth::user()->username)
@section('content')
    <div class="container">

        <p class="headder_text" style="position: relative; padding: 5px;">
        ออเดอร์ #{{$order->id}}<br>
        <span class="btn badge color_white fontsize12 category_badge">
        {{$order->status_order}}
        </span><br>
        </p>

        <div class="row">
            <div class="col">
                <div class="card cardbox">
                    <div class="card-body">
                                <div class="row">
                                    <div class="col" style="margin-bottom: -0.5rem;">
                                        <span  class="fontsize16 font-weight-bold">{{$order->category->name_category}}</span><br>
                                        <span class="fontsize14">
                                        ถ่ายภาพ{{$order->formattime->name_format_time}}
                                        </span>
                                    </div>

                                    <div class="col-4 text_right">
                                        <h3  class="fontsize18 badge category_badge color_white">{{$order->price}} ฿</h3>

                                    </div>                
                                </div>

                                <hr class="color_white">

                                @if( Auth::user()->role_id == '2')
                                <div class="row">
                                    <div class="col">
                                        <span class="all_more_link color_black font-weight-bold">ผู้ว่าจ้าง</span> 
                                        <br>
                                        <span class="fontsize14">{{ $order->employer->username }}</span>
                                    </div>
                                </div>
                                @else
                                <div class="row">
                                    <div class="col">
                                        <span class="all_more_link color_black font-weight-bold">ช่างภาพ</span> 
                                        <br>
                                        <span class="fontsize14">{{ $order->photographer->username }}</span>
                                    </div>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col">
                                        <span class="all_more_link color_black font-weight-bold">วันที่</span> 
                                        <br>
                                        <span class="fontsize14">{{ date("j M, Y", strtotime($order->date_work) )}}</span>
                                    </div>
                                    <div class="col">
                                        <span class="all_more_link color_black font-weight-bold">เวลา</span> 
                                        <br>
                                        <span class="fontsize14">{{$order->start_time.' - '.$order->end_time}}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span class="all_more_link color_black font-weight-bold">สถานที่</span> 
                                        <br>
                                        <span class="fontsize14 ">{{ $order->place_name }}</span>
                                        <a class="btn badge badge-info color_white" href="{{ $order->url }}" target="_blank"><i class="fas fa-map-marker-alt"></i> ดูแผนที่</a>
                                        <hr class="color_white">
                                        <span class="all_more_link color_black font-weight-bold">
                                            สิ่งที่ลูกค้าได้รับ
                                        </span>
                                        <p class="all_more_link fontsize14 color_black">
                                            {{$order->detail}}
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col text_center">

                                        @if($order->status_order == 'รอการตอบรับ')
                                        <div class="row">
                                            <div class="col">
                                                <button onclick="window.location.href='/order/{{$order->id}}/invoice'" class="btn btn_width btn_color bg_72AFD3" type="button">
                                                ส่งใบเสนอราคา
                                                </button>
                                            </div>
                                            <div class="col">
                                                <button onclick="window.location.href='/order/{{$order->id}}/viewfile'" class="btn btn_width btn_color color_72AFD3 bg_72AFD3_line" type="button">
                                                ปฏิเสธ
                                                </button>
                                            </div>
                                        </div>

                                        @elseif($order->status_order == 'ทำงานตามกำหนด')
                                        <div class="row">
                                            <div class="col">
                                                <button onclick="window.location.href='/order/{{$order->id}}/invoice'" class="btn btn_color bg_72AFD3" type="button" disabled>
                                                ส่งงาน
                                                </button><br>
                                                <span class="all_more_link">*จะสามารถส่งงานได้เมื่อผ่านวันจ้างงานไปแล้ว</span>
                                            </div>
                                        </div>

                                        @elseif($order->status_order == 'ชำระเงินแล้ว')
                                        <a class="btn badge bg_72AFD3 color_white radius_badge"
                                        href="" target="_blank">
                                            <i class="fas fa-file-download"></i> ดาวน์โหลดใบเสนอราคา
                                        </a>
                                        @endif

                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="headder_text margin_top20" style="position: relative; padding: 5px;">
        จัดการออเดอร์
        </p>

        <div class="row">

            <div class="col-md margin_top20 margin_bomtom20">
                <div class="inner-addon right-addon" id="headingOne">
                    <i class="fas fa-chevron-right selecticon top12 fontsize16 right-icon"></i>
                    <button onclick="window.location.href='/order/{{$order->id}}/viewfile'" class="menubtn fontsize16" type="button">
                        ไฟล์งาน
                    </button>
                </div>
            </div>
            <div class="col-md margin_bomtom20">
                    <button class="menubtn fontsize16 menubtnred color_ff4949" type="button">
                        ยกเลิกงาน
                    </button>
            </div>
        </div>

    </div>

<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/responsive_waterfall.js') }}"></script>
<script>
    var waterfall = new Waterfall({ 
        containerSelector: '.wf-container',
        boxSelector: '.wf-box',
        minBoxWidth: 250
    });
</script>
@stop