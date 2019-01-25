@extends('layouts.mainmenu_p')
@section('page_title', 'Chatchannel')
@section('content')

        <div class="row" style="padding: 15px; border-bottom: 1px solid rgba(0,0,0,0.1);">
            <div class="col-2">
                <div style="width:40px; height:40px; border-radius:20px; overflow: hidden; text-align:center;">
                    <img src="{{url('assets/image/avatar04.jpg')}}" style="height:100%;">    
                </div>
            </div>
            <div class="col-12 username_profile">
                <div class="row">
                    <div class="col-12" style="font-size:14px;">
                        <span>Username</span>
                    </div>
                    <div class="col-12">
                        <span>masessages text</span>
                    </div>
            </div>
            </div>
        </div>
        <div class="row" style="padding: 15px;  box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
            <div class="col-2">
                <div style="width:40px; height:40px; border-radius:20px; overflow: hidden; text-align:center;">
                    <img src="{{url('assets/image/avatar03.jpg')}}" style="height:100%;">    
                </div>
            </div>
            <div class="col-12 username_profile">
                <div class="row">
                    <div class="col-12" style="font-size:14px;">
                        <span>Username</span>
                    </div>
                    <div class="col-12">
                        <span>masessages text</span>
                    </div>
            </div>
            </div>
        </div>
    
@stop
