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
                <a class="btn badge bg_dbdbdb color_white" style="position: absolute; right: 0;" href="{{ url("profile/{$username}/album/{$album->id}/edit/") }}" >
                <i class="fas fa-pen"></i> แก้ไข
                </a>
            @endif
        @endif

        <br>
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

    </div>

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