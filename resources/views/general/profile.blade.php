@extends('layouts.mainmenu_general')
@section('page_title', 'Profile')
@section('content')
<div class="wrap_container_head">
        <div class="row">
            <div class="col-3">
                <div style="width:80px; height:80px; border-radius:40px; overflow: hidden;">
                    <img src="{{ url(Auth::user()->avatar) }}">   
                </div>
            </div>
            <div class="col" style="padding-top:30px;">
                <a class="a_getlink">
                    <span>
                    {{Auth::user()->username}} <span class="all_more_link">( {{Auth::user()->role->slug}} )</span>
                    </span>
            </a>
            </div>
            <div class="col text_right" style="padding-top:30px;">
                <button class="btn_layout_back" data-toggle="modal" data-target="#exampleModalCenter">ตั้งค่า</button>
            </div>
        </div>
        <ul class="nav nav-tabs row" style="padding:0; margin-bottom:20px;">
            <li class="nav-item col text_center" style="padding:0;">
            <a class="nav-link active" data-toggle="tab" href="#home">
                <img class="menu_list_profile" src="{{url('assets/image/heart_layout_black.svg')}}"><br>
                <span class="menu_list_profile_text">Favorite</span>
            </a>
            </li>
            <li class="nav-item col text_center" style="padding:0;">
                <a class="nav-link" data-toggle="tab" href="#menu1">
                    <img class="menu_list_profile" src="{{url('assets/image/user.svg')}}"><br>
                    <span class="menu_list_profile_text">Following</span>
                </a>
            </li>
        </ul>

    </div>

    <!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active container" id="home">
    <div class="card" style="padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
            <div style="width:100%; height:250px; overflow: hidden; position:relative; border-top-left-radius: 10px;  border-top-right-radius: 10px;">
                <div style="position: absolute; width:100%; padding:10px 0px 10px 10px;">
                    <div style="float:left;">
                        <span style="font-size:10px; border:1px solid #fff; border-radius:20px; padding:3px 8px; color:#fff;">ภาพถ่ายบุคคล</span>
                        <h3 style="font-size:14px; padding-right:10px; color:#fff; padding-top:5px;">Caption</h3>
                    </div>
                    <div class="col text_right" style="padding-top: 10px; color:#fff;">
                        <span>614 </span><img class="btn_fav" src="{{url('assets/image/heart.svg')}}">
                    </div>
                </div>
                <img class="card-img-top" src="{{url('assets/image/img_show03.jpg')}}">    
            </div>
            <div class="card-body" style="padding:10px">
                <div class="row">
                    <div class="col-2">
                        <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                            <img src="{{url('assets/image/avatar02.jpg')}}" style="height:100%;">    
                        </div>
                    </div>
                    <div class="col-6" style="font-size:10px;">
                        <div class="row">
                            <div class="col-12" style="font-size:14px; font-family: 'Prompt', Regular;">
                                <a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a>
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
                        <h3  style="font-size:14px; padding-right:10px;">900 ฿</h3>
                    </div>
                </div>
            </div>
    </div>

  </div>
  <div class="tab-pane container" id="menu1">
    <div class="card" style="padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
            <div class="card-body" style="padding:10px; border-top-left-radius: 10px; border-top-right-radius: 10px; background:#F2F2F2;">
                <div class="row">
                    <div class="col-2">
                        <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                            <img src="assets/image/avatar02.jpg" style="height:100%;">    
                        </div>
                    </div>
                    <div class="col-10" style="font-size:10px;">
                        <div class="row">
                            <div class="col-12" style="font-size:14px; font-family: 'Prompt', Regular;">
                                <a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a>
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
                </div>
            </div>
            <div style="width:100%; height:auto; overflow: hidden; padding:10px;">
                <div style="width:160px; height:160px; border-radius:10px; overflow: hidden; position:relative; float:left; margin-right:10px;">
                    <div style="position: absolute; width:100%; padding:10px 0px 10px 10px;">
                        <div style="float:left;">
                            <span style="font-size:10px; border:1px solid #fff; border-radius:20px; padding:3px 8px; color:#fff;">ภาพบุคคล/แฟชั่น</span>
                        </div>
                    </div>
                    <img style="height:100%;" src="assets/image/img_show03.jpg">    
                </div>
                <div style="width:160px; height:160px; border-radius:10px; overflow: hidden; position:relative;">
                    <div style="position: absolute; width:100%; padding:10px 0px 10px 10px;">
                        <div style="float:left;">
                            <span style="font-size:10px; border:1px solid #fff; border-radius:20px; padding:3px 8px; color:#fff;">รับปริญญา</span>
                        </div>
                    </div>
                    <img style="height:100%;" src="assets/image/img_show02.jpg">    
                </div>
            </div>
        </div>
  </div>
  

<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">ตั้งค่า</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <a class="btn btn_color btn_layout_bottom" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                                            {{ __('ออกจากระบบ') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        </div>
    </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


@stop