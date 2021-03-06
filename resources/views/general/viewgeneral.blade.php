@extends('layouts.mainprofile')
@section('page_title', 'Profile')
@section('content')

<div class="wrap_container_head">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="img_profile">
                    <img src="{{ url($user->avatar) }}">   
                </div>
            </div>
            <div class="col" style="padding-top:30px;">
                <a class="a_getlink">
                    <span>
                    {{$user->username}}</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
        
    <!-- <ul class="nav nav-tabs row" style="padding:0; margin-bottom:20px;">
            <li class="nav-item col text_center" style="padding:0;">
            <a class="nav-link active" data-toggle="tab" href="#menu1">
                <img class="menu_list_profile" src="{{url('assets/image/heart_layout_black.svg')}}"><br>
                <span class="menu_list_profile_text">Favorite</span>
            </a>
            </li>
            <li class="nav-item col text_center" style="padding:0;">
                <a class="nav-link" data-toggle="tab" href="#menu2">
                    <img class="menu_list_profile" src="{{url('assets/image/user.svg')}}"><br>
                    <span class="menu_list_profile_text">Following</span>
                </a>
            </li>
    </ul> -->

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

<div class="tab-content">
    <div class="tab-pane fade margin_top20 show active" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">
        <div class="container">
            <div>
                    <div class="card album_show_wrap bg_fff color_black">
                        <div class="album_show album_show_radiustop">
                            <div class="album_show_detail_group">
                                <div class="float_left">
                                    <span class="hastag_album">ภาพถ่ายบุคคล</span>
                                    <h3 class="caption_album">Caption</h3>
                                </div>
                                <div class="col text_right fav_count">
                                    <span>614 </span><img class="btn_fav" src="{{url('assets/image/heart.svg')}}">
                                </div>
                            </div>
                            <img class="card-img-top" src="{{url('assets/image/img_show03.jpg')}}">    
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
                                <div class="col-4 text_right">
                                    <span class="fontsize10" style="padding-right:10px;">เริ่มต้นที่</span>
                                    <h3  class="fontsize14" style="padding-right:10px;">900 ฿</h3>
                                </div>
                            </div>
                        </div>
                    </div>
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

<!-- <div class="container">
    <div class="tab-content">

        <div class="tab-pane active" id="menu1">
            
            <div>
                <div class="card album_show_wrap bg_fff color_black">
                    <div class="album_show album_show_radiustop">
                        <div class="album_show_detail_group">
                            <div class="float_left">
                                <span class="hastag_album">ภาพถ่ายบุคคล</span>
                                <h3 class="caption_album">Caption</h3>
                            </div>
                            <div class="col text_right fav_count">
                                <span>614 </span><img class="btn_fav" src="{{url('assets/image/heart.svg')}}">
                            </div>
                        </div>
                        <img class="card-img-top" src="{{url('assets/image/img_show03.jpg')}}">    
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
                            <div class="col-4 text_right">
                                <span class="fontsize10" style="padding-right:10px;">เริ่มต้นที่</span>
                                <h3  class="fontsize14" style="padding-right:10px;">900 ฿</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> 

        <div class="tab-pane" id="menu2">
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
            </div>
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
            </div>
        </div>

    </div>
</div> -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
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