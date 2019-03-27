@extends('layouts.mainprofile')
@section('page_title', 'View File')
@section('link_back', '/order/'.$order->id)
@section('content')

    <div class="container">
        <p class="headder_text" style="position: relative; padding: 5px;">
            <span class="headder_text">ออเดอร์ #{{$order->id}}</span>
            @if(Auth::guest())

            @else
                @if( Auth::user()->id == $order->id_photographer)
                    <a class="btn badge bg_72AFD3 color_white radius_badge" style="position: absolute; right: 0;" href="{{ url("order/{$order->id}/uploadfile") }}" >
                    <i class="fas fa-plus"></i> อัปโหลดไฟล์
                    </a>
                @elseif( Auth::user()->id == $order->id_employer)
                    <a class="btn badge bg_72AFD3 color_white radius_badge" style="position: absolute; right: 0;" href="/order/{{$order->id}}/download-all-file" >
                    <i class="fas fa-file-archive"></i> ดาวน์โหลด
                    </a>
                @endif
            @endif
            <br>
            <span class="btn badge color_white fontsize12 category_badge">
            {{$order->category->name_category}}
            </span><br>
        </p>
 
        <div class="wf-container">
            @foreach($fileworks as $filework)
            <div class="wf-box">
                <img class="radius10" src="{{ url('sendwork/'.$filework->filename) }}">
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