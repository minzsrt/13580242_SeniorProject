@extends('layouts.main')
@section('page_title', 'Profile')
@section('content')
<div class="wrap_container_head">
        <div class="row">
            <div class="col-3">
                <div style="width:80px; height:80px; border-radius:40px; overflow: hidden;">
                <img src="{{url('assets/image/avatar01.jpg')}}" style="height:100%;">   
                </div>
            </div>
            <div class="col" style="padding-top:30px;">
                <a class="a_getlink">
                    <span>
                    {{$user->username}}</span>
                    </span>
            </a>
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

    {{$user->username}}
    
@stop