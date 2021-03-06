@extends('layouts.mainprofile')
@section('page_title', 'List Package')
@section('link_back', '/profile/'.$username)
@section('content')
 
    <div class="container">
        @if (session('alertedit'))
        <div class="alert alert-success">
        {{ session('alertedit') }}
        </div>
        @endif
        @if (session('alertdelete'))
        <div class="alert alert-danger">
        {{ session('alertdelete') }}
        </div>
        @endif
    </div>

    <div class="container wrap_container_head">
        <div class="row">
            <div class="col">
                    <h3 class="headder_text">ค่าบริการถ่ายภาพ{{$head_category}}</h3>
            </div>
        </div>
    </div> 

    <div class="container">
        @foreach($package_cards as $package_card)
            @if($package_card->user->username == Auth::user()->username)
            <a class="a_getlink" href="{{ url("profile/{$username}/listPackage/{$package_card->id_category}/{$package_card->id}/edit") }}">
            @endif
                <div class="card-body album_show_wrap padding_card bg_color_gradient_opacity">
                    <div class="row color_black">
                        <div class="col-8" style="font-size:10px;">
                            <h3 class="fontsize18">
                            ถ่ายภาพ{{ $package_card->formattime->name_format_time }}
                            </h3>
                        </div>
                        <div class="col-4 text_right">
                        <h3  class="fontsize18 badge category_badge color_white">{{number_format($package_card->price)}} ฿
                        </h3>
                        </div>
                    </div>
                    <div class="row">
                        <p class="col detail_pack">
                        <span class="all_more_link color_72AFD3">สิ่งที่ได้รับ</span><br>
                            {{ $package_card->detail }}
                        </p>
                    </div>
                </div>
            @if($package_card->user->username == $username)
            </a>
            @endif
        @endforeach

        @if(Auth::guest())
        
        @else
            @if($username == Auth::user()->username)
            <form action="/createPackagecardCategory" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id_category" value="{{$get_id}}">
                <div class="btn_create">
                    <button type="submit" class="btn btn_width color_DBDBDB">
                        <i class="fas fa-plus-circle "></i>
                    </button> 
                </div>
            </form>
            @endif
        @endif
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

@stop
