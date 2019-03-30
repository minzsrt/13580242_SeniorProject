@extends('layouts.mainmenu_general')
@section('page_title', 'Index')
@section('content')

<div>
    @if ($albums->count() > 0)
        <div class="container wrap_container_head">
            <div class="row">
                <div class="col">
                    <h3 class="headder_text">รับปริญญา</h3>
                </div>
            </div>
        </div>
    @endif
    <div class="idcategory1">
        @foreach($albums as $album) 
            @if($album->id_category == 1) 
            <div style="margin:15px;">
                <div class="card album_show_wrap bg_fff color_black" >
                                <div class="album_show album_show_radiustop" style="width:100%; height:180px;">
                                    <img class="card-img-top" src="{{$album->cover_album}}">    
                                </div>
                                <div class="card-body pad10">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="img_profile_sm">
                                                <img src="{{$album->user->avatar}}" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-12 fontsize14">
                                                <a class="a_getlink" href="/profile/{{$album->user->username}}" target="_blank">
                                                {{$album->user->username}}
                                                </a>
                                                </div>
                                                <div class="col-12 fontsize10">
                                                <span class="btn badge color_white fontsize12 category_badge">
                                                {{$album->category->name_category}}
                                                </span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>

<div>
    @if ($albums->count() > 0)
        <div class="container wrap_container_head">
            <div class="row">
                <div class="col">
                    <h3 class="headder_text">ภาพบุคคล/แฟชั่น</h3>
                </div>
            </div>
        </div>
    @endif
    <div class="idcategory2">
        @foreach($albums as $album) 
            @if($album->id_category == 2) 
            <div style="margin:15px;">
                <div class="card album_show_wrap bg_fff color_black" >
                                <div class="album_show album_show_radiustop" style="width:100%; height:180px;">
                                    <img class="card-img-top" src="{{$album->cover_album}}">    
                                </div>
                                <div class="card-body pad10">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="img_profile_sm">
                                                <img src="{{$album->user->avatar}}" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-12 fontsize14">
                                                <a class="a_getlink" href="/profile/{{$album->user->username}}" target="_blank">
                                                {{$album->user->username}}
                                                </a>
                                                </div>
                                                <div class="col-12 fontsize10">
                                                <span class="btn badge color_white fontsize12 category_badge">
                                                {{$album->category->name_category}}
                                                </span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>

<div>
    @if ($albums->count() > 0)
        <div class="container wrap_container_head">
            <div class="row">
                <div class="col">
                    <h3 class="headder_text">งานแต่งงาน</h3>
                </div>
            </div>
        </div>
    @endif
    <div class="idcategory3">
        @foreach($albums as $album) 
            @if($album->id_category == 3) 
            <div style="margin:15px;">
                <div class="card album_show_wrap bg_fff color_black" >
                                <div class="album_show album_show_radiustop" style="width:100%; height:180px;">
                                    <img class="card-img-top" src="{{$album->cover_album}}">    
                                </div>
                                <div class="card-body pad10">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="img_profile_sm">
                                                <img src="{{$album->user->avatar}}" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-12 fontsize14">
                                                <a class="a_getlink" href="/profile/{{$album->user->username}}" target="_blank">
                                                {{$album->user->username}}
                                                </a>
                                                </div>
                                                <div class="col-12 fontsize10">
                                                <span class="btn badge color_white fontsize12 category_badge">
                                                {{$album->category->name_category}}
                                                </span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>

<div>
    @if ($albums->count() > 0)
        <div class="container wrap_container_head">
            <div class="row">
                <div class="col">
                    <h3 class="headder_text">พรีเวดดิ้ง</h3>
                </div>
            </div>
        </div>
    @endif
    <div class="idcategory4">
        @foreach($albums as $album) 
            @if($album->id_category == 4) 
            <div style="margin:15px;">
                <div class="card album_show_wrap bg_fff color_black" >
                                <div class="album_show album_show_radiustop" style="width:100%; height:180px;">
                                    <img class="card-img-top" src="{{$album->cover_album}}">    
                                </div>
                                <div class="card-body pad10">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="img_profile_sm">
                                                <img src="{{$album->user->avatar}}" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-12 fontsize14">
                                                <a class="a_getlink" href="/profile/{{$album->user->username}}" target="_blank">
                                                {{$album->user->username}}
                                                </a>
                                                </div>
                                                <div class="col-12 fontsize10">
                                                <span class="btn badge color_white fontsize12 category_badge">
                                                {{$album->category->name_category}}
                                                </span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>

<div>
    @if ($albums->count() > 0)
        <div class="container wrap_container_head">
            <div class="row">
                <div class="col">
                    <h3 class="headder_text">งานอีเวนต์</h3>
                </div>
            </div>
        </div>
    @endif
    <div class="idcategory5">
        @foreach($albums as $album) 
            @if($album->id_category == 5) 
            <div style="margin:15px;">
                <div class="card album_show_wrap bg_fff color_black" >
                                <div class="album_show album_show_radiustop" style="width:100%; height:180px;">
                                    <img class="card-img-top" src="{{$album->cover_album}}">    
                                </div>
                                <div class="card-body pad10">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="img_profile_sm">
                                                <img src="{{$album->user->avatar}}" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-12 fontsize14">
                                                <a class="a_getlink" href="/profile/{{$album->user->username}}" target="_blank">
                                                {{$album->user->username}}
                                                </a>
                                                </div>
                                                <div class="col-12 fontsize10">
                                                <span class="btn badge color_white fontsize12 category_badge">
                                                {{$album->category->name_category}}
                                                </span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>

<div>
    @if ($albums->count() > 0)
        <div class="container wrap_container_head">
            <div class="row">
                <div class="col">
                    <h3 class="headder_text">สถาปัตยกรรม</h3>
                </div>
            </div>
        </div>
    @endif
    <div class="idcategory6">
        @foreach($albums as $album) 
            @if($album->id_category == 6) 
            <div style="margin:15px;">
                <div class="card album_show_wrap bg_fff color_black" >
                                <div class="album_show album_show_radiustop" style="width:100%; height:180px;">
                                    <img class="card-img-top" src="{{$album->cover_album}}">    
                                </div>
                                <div class="card-body pad10">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="img_profile_sm">
                                                <img src="{{$album->user->avatar}}" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-12 fontsize14">
                                                <a class="a_getlink" href="/profile/{{$album->user->username}}" target="_blank">
                                                {{$album->user->username}}
                                                </a>
                                                </div>
                                                <div class="col-12 fontsize10">
                                                <span class="btn badge color_white fontsize12 category_badge">
                                                {{$album->category->name_category}}
                                                </span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>

<div>
    @if ($albums->count() > 0)
        <div class="container wrap_container_head">
            <div class="row">
                <div class="col">
                    <h3 class="headder_text">สินค้า/อาหาร</h3>
                </div>
            </div>
        </div>
    @endif
    <div class="idcategory7">
        @foreach($albums as $album) 
            @if($album->id_category == 7) 
            <div style="margin:15px;">
                <div class="card album_show_wrap bg_fff color_black" >
                                <div class="album_show album_show_radiustop" style="width:100%; height:180px;">
                                    <img class="card-img-top" src="{{$album->cover_album}}">    
                                </div>
                                <div class="card-body pad10">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="img_profile_sm">
                                                <img src="{{$album->user->avatar}}" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-12 fontsize14">
                                                <a class="a_getlink" href="/profile/{{$album->user->username}}" target="_blank">
                                                {{$album->user->username}}
                                                </a>
                                                </div>
                                                <div class="col-12 fontsize10">
                                                <span class="btn badge color_white fontsize12 category_badge">
                                                {{$album->category->name_category}}
                                                </span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

    @foreach($categories as $category)
    $('.idcategory{{$category->id}}').slick({
    centerMode: true,
    centerPadding: '60px',
    arrows: false,
    responsive: [
        {
        breakpoint: 768,
        settings: {
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        }
    ]
    });
    @endforeach

    });
  </script>
@stop
