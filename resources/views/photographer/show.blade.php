@extends('layouts.mainprofile')
@section('page_title', 'Show')
@section('content')
    <div class="container">

        <p class="headder_text" style="padding: 5px;">
        {{$album->name_album}}<br>
        <span class="btn badge bg_aeaeae color_white" style="border-radius: 15px;">
        {{$album->category->name_category}}
        </span>
        </p>   

        <div class="wf-container">
            @foreach($photos as $photo)
            <div class="wf-box">
                <img class="radius10" src="{{ url($photo->name_image) }}">
            </div>
            @endforeach
        </div>

        <!-- <section style="height:250px;"></section> -->

    </div>

    <nav class="container nav_bottom nav_bottom_profile" style="box-shadow: none;">
        <div class="row">
            <div class="col" style="display: inherit; padding-top:10px;">
                <a 	class="btn btn_layout_bottom" 
                    href="{{ url("photographer/show/{$album->id}/destroy/") }}" id="destroyalbum" >
                    ลบอัลบั้ม
                </a>  
            </div>
            <div class="col" style="display: inherit; padding-top:10px;">
                <a href="{{ url("profile/{$username}/album/{$album->id}/edit/") }}" class="btn_color btn_bottom" style="width:100%; margin:0; padding-top:10px;">แก้ไข</a>
            </div>
        </div>
    </nav>

<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/responsive_waterfall.js') }}"></script>
<script>
    var waterfall = new Waterfall({ 
        containerSelector: '.wf-container',
        boxSelector: '.wf-box',
        minBoxWidth: 250
    });
</script>
@stop