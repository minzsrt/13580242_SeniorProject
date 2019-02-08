@extends('layouts.main')
@section('page_title', 'List Package')
@section('content')
 
    <div class="container wrap_container_head">
        <div class="row">
            <div class="col">
                <h3 class="headder_text">ค่าบริการถ่ายภาพรับปริญญา</h3>
            </div>
        </div>
    </div> 

    <div class="container">
        @foreach($package_cards as $package_card)
            @if( Auth::user()->id == $package_card->id_user && $get_id == $package_card->id_category )
            <a class="a_getlink" href="{{ url("photographer/packages/show/{$package_card->id}/edit/") }}">
                <div class="card-body album_show_wrap padding_card">
                    <div class="row">
                        <div class="col-8" style="font-size:10px;">
                            <h3  style="font-size:18px; padding-right:10px; display: inline;" >
                            ถ่ายภาพ{{ $package_card->formattime->name_format_time }}
                            </h3>
                        </div>
                        <div class="col-4 text_right">
                            <h3  style="font-size:18px; padding-right:10px;">{{ $package_card->price }} ฿</h3>
                        </div>
                    </div>
                    <div class="row">
                        <p class="col detail_pack">
                        <span>สิ่งที่ได้รับ</span><br>
                            {{ $package_card->detail }}
                        </p>
                    </div>
                </div>
            </a>
            @endif
        @endforeach
        
            <div class="card btn_create">
                <button class="btn" onclick="window.location.href='/createPackageCard'">
                    <i class="fas fa-plus-circle"></i>
                </button> 
            </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

@stop
