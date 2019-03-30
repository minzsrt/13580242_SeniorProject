@extends('layouts.mainprofile')
@section('page_title', 'Cancal Order')
@section('link_back', '/profile/'.Auth::user()->username)
@section('content')

<form action="/order/{{$order->id}}/cancel/store" method="post">
{{ csrf_field() }}

    <div class="col-6">
        <h3 class="headder_text" style="padding: 5px;">ยกเลิกงาน</h3>
    </div>
    <div class="col-md">
        <span class="all_more_link">การดำเนินการนี้จะยกเลิกงานของคุณ</span>
        <p class="all_more_link">
            ช่วยให้เราเข้าใจถึงปัญหาที่เกิดขึ้นกับการยกเลิกงานนี้
        </p>
    </div>

    <nav class="container nav_bottom nav_bottom_profile" style="box-shadow: none;">
        <div class="row">
            <div class="col" style="display: inherit; padding-top:10px;">
            </div>
            <div class="col" style="display: inherit; padding-top:10px;">
                <button  type="submit" class="btn_color btn_bottom color_white" style="width:100%; margin:0; background:#ff4040;">ยกเลิกงาน</button>
            </div>
        </div>
    </nav>

    <div class="container">
    <div class="row">
            
            <div class="col-md margin_top10">
                <div class="row form-group" id="radioBtn">
                <a class="col-md" data-toggle="cancel" data-title="ปัญหาสุขภาพ">
                    <label class="container_radio">
                        <div class="row height60">
                            <div class="col padtop20">
                                <h3 class="fontsize14">ปัญหาสุขภาพ</h3>
                            </div>
                        </div>
                        <input type="radio" name="radio" checked>
                        <span class="checkmark"></span>
                    </label>
                </a>
                <a class="col-md" data-toggle="cancel" data-title="เข้าข่ายหลอกลวง">
                    <label class="container_radio">
                        <div class="row height60">
                            <div class="col padtop20">
                                <h3 class="fontsize14">เข้าข่ายหลอกลวง</h3>
                            </div>
                        </div>
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </a>
                <a class="col-md" data-toggle="cancel" data-title="อื่นๆ" id="more">
                    <label class="container_radio">
                        <div class="row height60">
                            <div class="col padtop20">
                                <h3 class="fontsize14">อื่นๆ</h3>
                            </div>
                        </div>
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </a>
                <input type="hidden" name="reason" id="cancel" value="ปัญหาสุขภาพ">
                </div>
            </div>
            
            <div class="col-md unshow" id="moredetail">
                <span class="all_more_link">อื่นๆ โปรดระบุ</span>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        {!! Form::textarea('detail',null,['class'=>'form-control textarea_edit']) !!}
                        <div>
                    </div>
                </div>
            </div>
                
    </div>

    <input type="text" name="id_user" value="{{Auth::user()->id}}">
    <input type="hidden" name="id_order" value="{{$order->id}}">

</form>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script language="javascript" type="text/javascript">
    jQuery(function($) {

        $('#radioBtn a').on('click', function(){
            var sel = $(this).data('title');
            var tog = $(this).data('toggle');
            $('#'+tog).prop('value', sel);
            
            $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]');
            $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]');
        });
    });
    $(document).ready(function() {
        $('#more').click(function() {
            if ($('#moredetail').hasClass("unshow")) {
                $('#moredetail').addClass('show');
                $('#moredetail').removeClass('unshow');
                console.log('done show');
            } else {
                $('#moredetail').removeClass('unshow');
                $('#moredetail').addClass('show');
                // console.log('done unshow');
            }
        });
    });

</script>
@stop
