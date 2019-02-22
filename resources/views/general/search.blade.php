@extends('layouts.mainmenu_guest')
@section('page_title', 'Search')
@section('content')

<form action="/search" method="POST" role="search">
        {{ csrf_field() }}
    <div class="container col-11 wrap_container_search accordion" id="hide_search">
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#hide_search">
            <div class="row">
                <div class="col">
                    <h3 class="headder_text text_center">ช่างภาพฝีมือดีกำลังรอคุณอยู่</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <span class="all_more_link">ประเภทงาน</span>
                    <div class="input-group">
                    <select class="form-control select_search" name="category" >
                        <option >เลือกประเภทงาน...</option>
                        <option value="1">รับปริญญา</option>
                        <option value="2">ภาพบุคคล/แฟชั่น</option>
                        <option value="3">งานแต่งงาน</option>
                        <option value="4">พรีเวดดิ้ง</option>
                        <option value="5">งานอีเวนต์</option>
                        <option value="6">สถาปัตยกรรม</option>
                        <option value="7">สินค้า/อาหาร</option>
                    </select>
                    </div>     
                </div>
                <div class="col-md" style="margin-top:10px;">
                    <span class="all_more_link">งบประมาณ (บาท)</span>
                    <div class="row">
                        <div class="col input-group">
                            <input name="price1" type="number" value="{{ !empty($price1)? $price1 : $price1 }}" placeholder="0" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                        </div>
                        <span>-</span>
                        <div class="col input-group">
                            <input name="price2" type="number" value="{{ !empty($price2)? $price2 : $price2 }}" placeholder="1500" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                        </div>
                    </div>
                </div>
                <div class="col-md" style="margin-top:10px;">
                    <span class="all_more_link">วันที่</span>
                    <input type="date" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                </div>
                <div class="col-md" style="margin-top:10px; font-size:14px;">
                    <span class="all_more_link">เวลา</span>
                    <div class="input-group">
                        <div id="radioBtn" class="row">
                            <div class="col">
                                <a class="btn btn_layout btn_width btn_layout_select active" data-toggle="formattime" data-title="1">ครึ่งวัน</a>
                            </div>
                            <div class="col">
                                <a class="btn btn_layout btn_width {{ $formattime == '2'? $formattime : 'active' }} notActive" data-toggle="formattime" data-title="2">เต็มวัน</a>
                            </div>
                            <div class="col">
                                <a class="btn btn_layout btn_width notActive" data-toggle="formattime" data-title="3">รายชั่วโมง</a>
                            </div>
                        </div>
    				    <input type="hidden" name="formattime" id="formattime" value="{{ !empty($formattime)? $formattime : $formattime }}">
    			    </div>   
                </div>
                <div class="col-md input-group" style="margin-top:10px;">
                    <span class="all_more_link">สถานที่</span>
                    <select class=" select_search">
                        <option selected>เลือกสถานที่...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                    <button class="btn_color" type="submit">Search</button>            
            </div>
        </div>

        <button id="arrowupdown" class="btn btn_transparent btn_width showArrow" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-angle-up"></i>
        </button>
    </div>
    </form>

    <div class="container margin_top20">
        @if(isset($details))
        {{ $alertsearch }}
        @foreach($package_cards as $package_card) 
        
        <div class="card album_show_wrap bg_fff color_black">
            <div class="album_show">
            </div>
            <div class="card-body" style="padding:10px">
                <div class="row">
                    <div class="col-2">
                        <div class="order_img_profile">
                            <img src="assets/image/avatar01.jpg" style="height:100%;">  
                            
                        </div>
                    </div>
                    <div class="col-6" style="font-size:10px;">
                        <div class="row">
                            <div class="col-12" style="font-size:14px; font-family: 'Prompt', Regular;">
                                <span>{{$package_card->user->username}}</span>
                            </div>
                            <div class="col-12">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-4 text_right">
                        <span style="font-size:10px; padding-right:10px;">เริ่มต้นที่</span>
                        <h3  style="font-size:14px; padding-right:10px;">{{$package_card->price}} ฿</h3>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif


    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
    jQuery(function($) {
        $('#arrowupdown').on('click', function() {
            var $el = $(this),
            textNode = this.lastChild;
            $el.find('i').toggleClass('fas fa-angle-up fas fa-angle-down');
        });

        $('#radioBtn a').on('click', function(){
            var sel = $(this).data('title');
            var tog = $(this).data('toggle');
            $('#'+tog).prop('value', sel);
            
            $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active btn_layout_select').addClass('notActive');
            $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active btn_layout_select');
        });
    });
    </script>

@stop
