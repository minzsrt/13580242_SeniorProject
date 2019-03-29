@extends('layouts.mainprofile')
@section('page_title', 'Show')
@section('link_back', '/profile/'.$album->user->username)
@section('content')
    <div class="container">


        <p class="headder_text" style="position: relative; padding: 5px;">
            {{$album->name_album}}
        
        @if(Auth::guest())

        @else
            @if( Auth::user()->id === $album->id_user)
                <a class="btn badge badge-info color_white" style="position: absolute; right: 0;" href="{{ url("profile/{$username}/album/{$album->id}/edit/") }}" >
                <i class="fas fa-pen"></i> แก้ไข
                </a>
            @endif
        @endif

        <br>
        <span class="btn badge color_white fontsize12 category_badge">
        {{$album->category->name_category}}
        </span>
        </p>   

        <!-- <p class="imglist" style="max-width: 520px;">
            @foreach($photos as $photo)
            <a data-fancybox-trigger="preview" href="javascript:;" data-width="1500" data-height="1000">
                <img src="{{ url($photo->name_image) }}">
            </a>
            @endforeach
        </p> -->
        
        <!-- <p class="imglist" style="max-width: 520px;"> -->
        <div class="wf-container">
            @foreach($photos as $photo)
                <div class="wf-box">
                    <a href="{{ url($photo->name_image) }}" data-fancybox="preview">
                        <img class="radius10" src="{{ url($photo->name_image) }}">
                    </a>
                </div>
            @endforeach
        </div>
        <!-- </p> -->


        <!-- <div class="wf-container">
            @foreach($photos as $photo)
            <div class="wf-box">
                <img class="radius10" src="{{ url($photo->name_image) }}">
            </div>
            @endforeach
        </div> -->

    </div>

<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/responsive_waterfall.js') }}"></script>
<script src="{{ URL::asset('js/jquery.fancybox.min.js') }}"></script>
<script>
    $(document).ready(function() {

        var waterfall = new Waterfall({ 
            containerSelector: '.wf-container',
            boxSelector: '.wf-box',
            minBoxWidth: 250
        });

        $('[data-fancybox="preview"]').fancybox({
            transitionEffect: "fade",
            buttons: [
                "zoom",
                "download",
                "delete",
                "thumbs",
                "close"
            ],
            transitionDuration: 500,
            // btnTpl: {
            //     delete:
            //     '<button type="button" class="fancybox-button" >' +
            //     '<i class="fas fa-trash"></i>' +
            //     "</button>"
            // },
            
        });
    });
</script>
@stop