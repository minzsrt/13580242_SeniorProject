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
                                        <h3  class="fontsize18 badge category_badge color_white">{{number_format($order->total)}} ฿
                                        </h3>
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
                                        <span class="fontsize14">{{ date("j M Y", strtotime($order->date_work) )}}</span>
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
                                       
                                    </div>
                                </div>

                                <hr class="color_white">

                                @if(Auth::user()->role_id == '3')
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-8">
                                                <span class="all_more_link color_black font-weight-bold">รายการ</span> 
                                            </div>
                                            <div class="col">
                                                <span class="all_more_link color_black font-weight-bold">ราคา</span> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <span class="fontsize14">{{ 'งานถ่าย'.$order->category->name_category.$order->formattime->name_format_time}}</span> 
                                            </div>
                                            <div class="col">
                                                <span class="fontsize14">{{number_format($order->price)}}</span> 
                                            </div>
                                        </div>
        
                                        @if(!empty($order->transportation_cost))
                                        <div class="row">
                                            <div class="col-8">
                                                <span class="fontsize14">ค่าเดินทาง</span> 
                                            </div>
                                            <div class="col">
                                                <span class="fontsize14">{{number_format($order->transportation_cost)}}</span> 
                                            </div>
                                        </div>
                                        @endif

                                        <div class="row">
                                            <div class="col-8 text_right">
                                                <span class="fontsize14 font-weight-bold">รวมยอด</span> 
                                            </div>
                                            <div class="col">
                                                <span class="fontsize14 font-weight-bold"><u>{{number_format($order->total)}}</u></span> 
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr class="color_white">
                                @endif

                                <div class="row">
                                    <div class="col">
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

                                        @if($order->status_order == 'รอการตอบรับ' && Auth::user()->role_id == '2')
                                        <div class="row">
                                            <div class="col">
                                                <button onclick="window.location.href='/order/{{$order->id}}/invoice'" class="btn btn_width btn_color bg_72AFD3" type="button">
                                                ส่งใบเสนอราคา
                                                </button>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn_width btn_color color_72AFD3 bg_72AFD3_line" type="button" data-toggle="modal" data-target="#cancel{{$order->id}}">
                                                ปฏิเสธ
                                                </button>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="cancel{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="cancel{{$order->id}}Title" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <form action="/order/{{$order->id}}/reject/store" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col margin_top10">
                                                                    <h3 class="headder_text text_center ">คุณแน่ใจหรือไม่ที่จะปฏิเสธงานนี้</h3>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                <button type="button" class="btn btn_width btn_color bg_72AFD3_line color_72AFD3" data-dismiss="modal">ยกเลิก</button>
                                                                </div>
                                                                <div class="col">
                                                                <button type="submit" class="btn btn_width btn_color bg_72AFD3">แน่ใจ</button>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @elseif($order->status_order == 'รอชำระเงิน' && Auth::user()->role_id == '3')
                                        <div class="row">
                                            <div class="col text_center">
                                                    <div class="row" id="payment">
                                                        <form name="checkoutForm" method="POST" action="/listpayment">
                                                            @csrf
                                                            <input type="hidden" name="order_id" value="{{$order->id}}">
                                                            <script type="text/javascript" src="https://cdn.omise.co/omise.js"
                                                                data-key="{{ $OMISE_PUBLIC_KEY }}"
                                                                data-image="{{url('assets/image/logo.png')}}"
                                                                data-frame-label="ชำระเงิน"
                                                                data-button-label="ชำระเงิน"
                                                                data-submit-label="Submit"
                                                                data-location="no"
                                                                data-amount="{{ $chargeAmount }}"
                                                                data-currency="thb"
                                                                >
                                                            </script>
                                                        <!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
                                                        </form>
                                                    </div>
                                            </div>
                                        </div>

                                        @elseif($order->status_order == 'ชำระเงินแล้ว' && Auth::user()->role_id == '2')
                                        <div class="row">
                                            <div class="col">
                                                <form action="/order/{{$order->id}}/sendwork" method="POST">
                                                    {{ csrf_field() }}

                                                    <button type="submit"  id="load" class="margin_auto btn btn_color bg_72AFD3" type="button" 
                                                    @if( date('Ymd') < date('Ymd', strtotime($order->date_work)) && $fileworks->count() == 0 ) disabled @endif >
                                                    ส่งงาน
                                                    </button>
                                                </form>
                                                @if($order->status_order == 'ชำระเงินแล้ว')
                                                <span class="all_more_link color_72AFD3">*จะสามารถส่งงานได้เมื่อผ่านวันจ้างงานไปแล้ว</span>
                                                @endif
                                            </div>
                                        </div>
                                        @elseif($order->status_order == 'ส่งงาน' && Auth::user()->role_id == '3')
                                        <div class="row">
                                            <div class="col">
                                                    <button data-toggle="modal" data-target="#modalorder{{$order->id}}" class="margin_auto btn btn_color bg_72AFD3" type="button" >
                                                    รีวิว
                                                    </button>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="modalorder{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="modalorder{{$order->id}}Title" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                <div class="modal-body">
                                                    <form action="/order/{{$order->id}}/review/store" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="order_img_profile">
                                                                <img src="{{url($order->photographer->avatar)}}"> 
                                                            </div>
                                                            <h3 class="headder_text text_center review_username">รีวิวช่างภาพ {{$order->photographer->username}}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md text_left">
                                                            <span class="all_more_link">เรทติ้ง</span>
                                                            <div class="form-group">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                        <div class="star-rating">
                                                                            <span class="fas fa-star" data-rating="1"></span>
                                                                            <span class="fas fa-star" data-rating="2"></span>
                                                                            <span class="fas fa-star" data-rating="3"></span>
                                                                            <span class="fas fa-star" data-rating="4"></span>
                                                                            <span class="fas fa-star" data-rating="5"></span>
                                                                            <input type="hidden" name="rating" class="rating-value" value="0">
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md text_left">
                                                            <span class="all_more_link">ความคิดเห็น</span>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <input type="textarea" name="comment" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="id_user" class="form-control " value="{{Auth::user()->id}}">
                                                        <input type="hidden" name="id_photographer" class="form-control " value="{{$order->id_photographer}}">
                                                        <input type="hidden" name="id_order" class="form-control " value="{{$order->id}}">
                                                        <button type="submit" class="btn btn_color bg_72AFD3 btnload" id="load">
                                                        รีวิว
                                                        </button>
                                                    </div>
                                                </div>
                                                    </form>
                                                </div>
        
                                                </div>
                                            </div>
                                        </div>



                                        @elseif($order->status_order == 'เสร็จสิ้น' && $review != null)
                                        <div class="row">
                                            <div class="col">
                                                <div class="star-rating" id="rating{{$review->id}}">
                                                <span class="fas fa-star" data-rating{{$review->id}}="1"></span>
                                                <span class="fas fa-star" data-rating{{$review->id}}="2"></span>
                                                <span class="fas fa-star" data-rating{{$review->id}}="3"></span>
                                                <span class="fas fa-star" data-rating{{$review->id}}="4"></span>
                                                <span class="fas fa-star" data-rating{{$review->id}}="5"></span>
                                                <input type="hidden" id="rating{{$review->id}}" class="rating-value{{$review->id}}" value="{{$review->rating}}">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <p class="headder_text">
                                                    " {{$review->comment}} "
                                                </p> 
                                            </div>
                                        </div>
                                        @endif

                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>

        @if($order->status_order == 'รอชำระเงิน'||$order->status_order == 'ชำระเงินแล้ว' || $order->status_order == 'ส่งงาน' || $order->status_order == 'เสร็จสิ้น')

        <p class="headder_text margin_top20" style="position: relative; padding: 5px;">
        จัดการออเดอร์
        </p>

        <div class="row">

            @if($order->status_order != 'รอการตอบรับ' && $order->status_order != 'รอชำระเงิน')
            <div class="col-md margin_bomtom20">
                <div class="inner-addon right-addon" id="headingOne">
                    <i class="fas fa-chevron-right selecticon top12 fontsize16 right-icon"></i>
                    <button onclick="window.location.href='/order/{{$order->id}}/invoice/download'" class="menubtn fontsize16" type="button">
                        ใบเสนอราคา
                    </button>
                </div>
            </div>
            @endif
            @if(Auth::user()->role_id == '2' && $order->status_order != 'รอการตอบรับ' && $order->status_order != 'รอชำระเงิน')
            <div class="col-md margin_bomtom20">
                <div class="inner-addon right-addon" id="headingOne">
                    <i class="fas fa-chevron-right selecticon top12 fontsize16 right-icon"></i>
                    <button onclick="window.location.href='/order/{{$order->id}}/viewfile'" class="menubtn fontsize16" type="button">
                        ไฟล์งาน
                    </button>
                </div>
            </div>
            @endif
            @if(Auth::user()->role_id == '3' && $order->status_order != 'รอการตอบรับ' && $order->status_order != 'รอชำระเงิน' && $order->status_order != 'ชำระเงินแล้ว')
            <div class="col-md margin_bomtom20">
                <div class="inner-addon right-addon" id="headingOne">
                    <i class="fas fa-chevron-right selecticon top12 fontsize16 right-icon"></i>
                    <button onclick="window.location.href='/order/{{$order->id}}/viewfile'" class="menubtn fontsize16" type="button">
                        ไฟล์งาน
                    </button>
                </div>
            </div>
            @endif

            @if($order->status_order != 'เสร็จสิ้น' && $order->status_order != 'ส่งงาน' )
            <div class="col-md margin_bomtom20">
                    <button onclick="window.location.href='/order/{{$order->id}}/cancel'" class="menubtn fontsize16 menubtnred color_ff4949" type="button">
                        ยกเลิกงาน
                    </button>
            </div>
            @endif

        </div>
        @endif


    </div>

<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/responsive_waterfall.js') }}"></script>
<script>

    $('.btnload').on('click', function() {
            document.getElementById("load").innerHTML = "<div class='spinner'><div class='bounce1'></div><div class='bounce2'></div><div class='bounce3'></div></div>";
            // document.getElementById("load").disabled = true;
            console.log('button loading');
    });

    // rating
    @if($order->status_order == 'เสร็จสิ้น' && $review != null)
    $(document).ready(function() {
        var $star_rating_val = $(' .star-rating .fas');
        var SetRatingStar = function() {
            return $star_rating_val.each(function() {
                if (parseInt($star_rating_val.siblings('input.rating-value{{$review->id}}').val()) >= parseInt($(this).data('rating{{$review->id}}'))) {
                    return $(this).addClass('checked');
                }
            });
        };
    SetRatingStar();
    });
    @endif

    // rating
    @if($order->status_order == 'ส่งงาน')
    $(document).ready(function() {

    var $star_rating = $('.star-rating .fas');

    var SetRatingStar = function() {
    return $star_rating.each(function() {
        if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
        return $(this).addClass('checked');
        } else {
        return $(this).removeClass('checked');
        }
    });
    };

    $star_rating.on('click', function() {
    $star_rating.siblings('input.rating-value').val($(this).data('rating'));
    return SetRatingStar();
    });

    SetRatingStar();

    });
    @endif

    
    
</script>
@stop