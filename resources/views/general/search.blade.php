@extends('layouts.mainmenu_general')
@section('page_title', 'Search')
@section('content')

<form action="/search" method="POST" role="search">
        {{ csrf_field() }}
    <div class="container col-11 wrap_container_search accordion" id="hide_search">
        <div id="collapseOne" class="collapse @if(empty($package_cards)) show @endif" aria-labelledby="headingOne" data-parent="#hide_search">
            <div class="row">
                <div class="col">
                    <h3 class="headder_text text_center">ช่างภาพฝีมือดีกำลังรอคุณอยู่</h3>
                </div>
            </div>
 
            <div class="row">
                <div class="col-md-12">
                    <span class="all_more_link">ประเภทงาน</span>
                    <div class="inner-addon right-addon">
                        <i class="fas fa-chevron-down selecticon right-icon"></i>
                        <!-- {!! Form::select('category', $id_category, $id_category, ['class' => 'form-control select_search']) !!} -->
                        <select name="category" class="form-control select_search">
                            @foreach($id_category as $valuecategory)
                                <option value="{{ $valuecategory->id }}"
                                    @if(!empty($categorySearch))
                                    {{ $categorySearch->id == $valuecategory->id  ? 'selected' : ''}}
                                    @endif
                                    >
                                    {{ $valuecategory->name_category}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                    </div>     
                </div>
                <div class="col-md-12" style="margin-top:10px;">
                    <span class="all_more_link">งบประมาณ (บาท)</span>
                    <div class="row">
                        <div class="col input-group">
                            <input name="price1" type="number" value="{{ !empty($price1)? $price1 : $price1 }}" placeholder="ex. 0" class="input_box">
                        </div>
                        <span>-</span>
                        <div class="col input-group">
                            <input name="price2" type="number" value="{{ !empty($price2)? $price2 : $price2 }}" placeholder="ex. 1,500" class="input_box">
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top:10px;">
                    <span class="all_more_link">วันที่</span>
                    <div class="inner-addon right-addon">
                        <i class="fas fa-calendar-alt right-icon"></i>
                       
                        <input type="text" id="text-calendar" class="calendar input_box" name="date"  @if(!empty($date)) value="{{$date}}" @endif />
                    </div>
                </div>
                <div class="col-md-12" style="margin-top:10px; font-size:14px;">
                    <span class="all_more_link">เวลา</span>
                    <div class="input-group">
                        <div id="radioBtn" class="row">
                            <div class="col">
                                <a class="btn btn_layout btn_width noneshadow 
                                    @if(!empty($formattime) && $formattime == '1') 
                                        active btn_layout_select color_white
                                    @else
                                        notActive color_AEAEAE
                                    @endif
                                " data-toggle="formattime" data-title="1">ครึ่งวัน</a>
                            </div>
                            <div class="col">
                                <a class="btn btn_layout btn_width noneshadow 
                                @if(!empty($formattime) && $formattime == '2') 
                                    active btn_layout_select color_white
                                @else
                                    notActive color_AEAEAE
                                @endif
                                " data-toggle="formattime" data-title="2">เต็มวัน</a>
                            </div>
                            <div class="col">
                                <a class="btn btn_layout btn_width noneshadow 
                                @if(!empty($formattime) && $formattime == '3') 
                                    active btn_layout_select color_white
                                @else
                                    notActive color_AEAEAE
                                @endif
                                " data-toggle="formattime" data-title="3">รายชั่วโมง</a>
                            </div>
                        </div>
                        <input type="hidden" name="formattime" id="formattime" 
                        @if(!empty($formattime)) 
                            value="{{$formattime}}"
                        @else
                            value="1"
                        @endif>
    			    </div>   
                </div>
                <div class="col-md-12 input-group" style="margin-top:10px;">
                    <span class="all_more_link">สถานที่</span>
                    <div class="inner-addon right-addon">
                        <i class="fas fa-chevron-down selecticon right-icon"></i>
                        <select name="scopework" class="form-control select_search">
                            @foreach($scopeworks as $scopework)
                                <option value="{{ $scopework->id }}"
                                    @if(!empty($scope))
                                    {{ $scope == $scopework->id  ? 'selected' : ''}}
                                    @endif
                                    >
                                    {{ $scopework->scopework}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                    <button class="btn_color" type="submit">Search</button>            
            </div>
        </div>

        <button id="arrowupdown" class="btn btn_transparent btn_width showArrow" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
</form>

    <div class="container margin_top20">
            
    @if(!empty($package_cards))
        <div class="row">
            <div class="col">
                <h3 class="headder_text">ผลการค้นหา{{$categorySearch->name_category}}</h3>
            </div>
        </div>  
        
        @foreach($package_cards as $package_card) 
        <a class="a_getlink" href="/profile/{{$package_card->user->username}}" target="_blank">
                    <div class="card album_show_wrap bg_fff color_black">
                        <div class="album_show album_show_radiustop">
                            <div class="album_show_detail_group">
                                <div class="float_left">
                                    <span class="hastag_album">{{$package_card->category->name_category}}</span>
                                </div>
                            </div>
                            @foreach($albums as $album) 
                                @if($package_card->id_user == $album->id_user)
                                <img class="card-img-top" src="{{$album->cover_album}}">    
                                @endif
                            @endforeach
                        </div>
                        <div class="card-body pad10">
                            <div class="row">
                                <div class="col-2">
                                    <div class="img_profile_sm">
                                        <img src="{{$package_card->user->avatar}}" style="height:100%;">    
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="row">
                                        <div class="col-12 fontsize14">
                                            <span>{{$package_card->user->username}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col text_right">
                                    <span class="fontsize10" style="padding-right:10px;">เริ่มต้นที่</span>
                                    <h3  class="fontsize14" style="padding-right:10px;">{{$package_card->price}} ฿</h3>
                                </div>
                            </div>
                        </div>
                    </div>
        </a>
        @endforeach
    @endif


    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{ URL::asset('js/pignose.calendar.min.js') }}"></script>
    <script>
    jQuery(function($) {
        $('#arrowupdown').on('click', function() {
            var $el = $(this),
            textNode = this.lastChild;
            $el.find('i').toggleClass('fas fa-angle-down fas fa-angle-up');
        });

        $('#radioBtn a').on('click', function(){
            var sel = $(this).data('title');
            var tog = $(this).data('toggle');
            $('#'+tog).prop('value', sel);
            
            $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active btn_layout_select color_white').addClass('notActive color_AEAEAE');
            $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive color_AEAEAE').addClass('active btn_layout_select color_white');
        });

        $('input.calendar').pignoseCalendar({
            format: 'YYYY-MM-DD',// date format string. (2017-02-02)
            disabledDates:[
                @if($disableddate->count() > 0)
                @foreach ($disableddate as $disdate)
                
                '{{$disdate->date_work}}',
                
                @endforeach
                @endif
            ],
        });


        
    });

    </script>

@stop
