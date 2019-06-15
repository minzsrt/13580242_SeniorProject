@extends('layouts.mainmenu_general')
@section('page_title', 'Profile')
@section('content')
<div class="wrap_container_head">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="img_profile">
                    <img src="{{ url(Auth::user()->avatar) }}">   
                </div>
            </div>
            <div class="col" style="padding-top:30px;">
                <a class="a_getlink">
                    <span>
                    {{Auth::user()->username}}
                    </span>
                </a>
            </div>
            <div class="col text_right" style="padding-top:30px;">
                <button id="actions" class="btn_layout_back">ตั้งค่า</button>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs nav-justified" role="tablist">
        <div class="slider"></div>
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="true">
                <img class="menu_list_profile" src="{{url('assets/image/history.svg')}}"><br>
                <span class="menu_list_profile_text">History</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu3" role="tab" aria-controls="profile" aria-selected="false">
                
            </a>
        </li>
    </ul>

</div>

<!-- Tab panes -->

<div class="tab-content">
    <div class="tab-pane fade margin_top20 show active" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">
        <div class="container">
            <div class="row margin_box10" >
            @foreach($histories as $history) 
                <div class="col-12 noti_card noti_active" onclick="window.location.href='/order/{{$history->id}}'">
                            <span class="all_more_link fontsize10">
                            {{ date("j M Y", strtotime($history->date_work) )}}
                            </span>
                            <br>
                            <span class="all_more_link color_72AFD3">
                            {{ $history->category->name_category }}
                            </span>
                            <div class="row">
                                <div class="col fontsize14">
                                    จ้างงาน {{$history->employer->username}}
                                </div>
                                <div class="col text-right">
                                    <span class="btn badge color_white fontsize12 category_badge">
                                    {{ $history->status_order }}
                                    </span>
                                </div>
                            </div>

                </div>
            @endforeach

            </div>
        </div>
    </div><!-- end menu 1 -->

    <div class="tab-pane fade margin_top20" id="menu2" role="tabpanel" aria-labelledby="menu2-tab">
        <div class="container">
            <div class="bg_fff color_black">
                <div class="card-body" style="padding:10px">
                    <div class="row">
                        <div class="col-2">
                            <div class="img_profile_sm">
                                <img src="{{url('assets/image/avatar02.jpg')}}" style="height:100%;">    
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 fontsize14">
                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a>
                                </div>
                                <div class="col-12 fontsize10">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text_right"  style="padding-top: 5px;">
                            <button class="btn_layout_back">Unfollow</button>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="padding:10px">
                    <div class="row">
                        <div class="col-2">
                            <div class="img_profile_sm">
                                <img src="{{url('assets/image/avatar02.jpg')}}" style="height:100%;">    
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 fontsize14">
                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a>
                                </div>
                                <div class="col-12 fontsize10">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text_right"  style="padding-top: 5px;">
                            <button class="btn_layout_back">Unfollow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div><!-- end menu 2 -->
</div>

    <a style="display:none;" id="logout" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

<script>
    $(function () {
        $('#actions').click(function () {
            $.actions([
                [
                    {
                        text: '<a href="{{ url('/profile/'.Auth::user()->username.'/edit') }}">แก้ไขข้อมูลส่วนตัว</a>',
                        
                    },
                    {
                        text: '<font style="color:red;">ออกจากระบบ</font>',
                        onClick: function () {
                            document.getElementById('logout').click();
                        }
                    }
                ],
                [
                    {
                        text: 'ยกเลิก',
                    }
                ],

            ]);
        });
        $(".nav-tabs a").click(function() {
            var position = $(this).parent().position();
            console.log(position);
            var width = $(this).parent().width();
            console.log(width);
            $(".slider").css({"left":+ position.left,"width":width});
        });
        var actWidth = $(".nav-tabs").find(".active").parent("li").width();
            console.log(actWidth);
        var actPosition = $(".nav-tabs .active").position();
        $(".slider").css({"left":+ actPosition.left,"width": actWidth});
    });
</script>


@stop