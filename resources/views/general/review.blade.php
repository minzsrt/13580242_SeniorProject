@extends('layouts.main_empty')
@section('page_title', 'Notification')
@section('content')

<form action="/order/{{$id}}/review/store" method="post">
{{ csrf_field() }}
    <div class="container">
    <div class="row">
        <div class="col">
            <div class="order_img_profile">
                <img src="{{url($user->avatar)}}"> 
            </div>
            <h3 class="headder_text text_center review_username">รีวิวช่างภาพ {{$user->username}}</h3>
        </div>
    </div>
    <div class="row">
            <div class="col-md">
                <span class="all_more_link">เรทติ้ง</span>
                <div class="form-group">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="star-rating">
                                <span class="fas fa-star" data-rating="1"></span>
                                <span class="fas fa-star" data-rating="2"></span>
                                <span class="fas fa-star" data-rating="3"></span>
                                <span class="fas fa-star" data-rating="4"></span>
                                <span class="fas fa-star" data-rating="5"></span>
                                <input type="hidden" name="rating" class="rating-value" value="0">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <span class="all_more_link">ความคิดเห็น</span>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="textarea" name="comment" class="form-control textarea_edit">
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id_user" class="form-control " value="{{Auth::user()->id}}">
            <input type="text" name="id_photographer" class="form-control " value="{{$user->id}}">
            <input type="hidden" name="id_order" class="form-control " value="{{$id}}">
            <button type="submit" class="btn btn_color btn_width">
            รีวิว
            </button>
        </div>
    </div>

</form>

@stop