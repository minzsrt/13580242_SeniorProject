@extends('layouts.main')
@section('page_title', 'Show')
@section('content')
        <div class="card album_show_wrap">
            <div class="album_show">
                <div class="album_show_detail_group">
                    <div class="float_left">
                        <span class="hastag_album">ภาพถ่ายบุคคล</span>
                    </div>
                    <div class="col text_right fav_count">
                        <span>614 </span><img class="btn_fav" src="{{url('assets/image/heart_layout.svg')}}">
                    </div>
                </div>
                <img class="card-img-top" src="{{ url('assets/image/img_show_020'.$album->id.'.jpg') }}">    
            </div>
            <div class="card-body" style="padding:20px">
                <div class="row">
                    <div class="col-8" style="font-size:10px;">
                        <span class="hastag_album" style="color:#000;">ภาพถ่ายบุคคล</span>
                        <h3 class="headder_text" style="color:#000;">{{ $album->name_album }}</h3>
                    </div>
                    <div class="col text_right fav_count">
                        <span style="color:#000;">614 </span><img class="btn_fav" src="{{url('assets/image/heart_layout.svg')}}">
                    </div>
                </div>
            </div>
        </div>
@stop