@extends('layouts.main3')
@section('page_title', 'Edit')
@section('btn_name', 'แก้ไขอัลบั้ม')
@section('content')

{!! Form::model($album, ['method' => 'GET','action' => ['AlbumsController@update', $album->id]]) !!}
    <div class="card album_show_wrap">
            <div class="album_show">
                <img class="card-img-top" src="{{ url('assets/image/img_show_020'.$album->id.'.jpg') }}">    
            </div>
    </div>

    <div class="row">
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">ชื่ออัลบั้ม</span>
                <div class="row">
                    <div class="col">
                    <div class="form-group">
                    {!! Form::text('name_album', null, ['class'=>'form-control']) !!}
                    <div>
                        <!-- <textarea style="width:100%; height:80px; border-radius: 10px; border: 1px solid #ccc;">
                        </textarea> -->
                    </div>
                </div>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">แท็ก</span>
                <select class="select_search" style="">
                    <option selected>เลือกประเภทงาน...</option>
                    <option value="1">รับปริญญา</option>
                    <option value="2">ภาพบุคคล/แฟชั่น</option>
                    <option value="3">งานแต่งงาน</option>
                    <option value="1">พรีเวดดิ้ง</option>
                    <option value="2">งานอีเวนต์</option>
                    <option value="3">สถาปัตยกรรม</option>
                    <option value="3">สินค้า/อาหาร</option>
                </select>
            </div>
            <div class="col-md">
                {!! Form::submit('แก้ไขอัลบั้ม',['class' => 'btn_color btn_color_bar']) !!}
            </div>
        </div>
    {!! Form::close() !!}

@stop
