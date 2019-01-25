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
                    </div>
                </div>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">แท็ก</span>
                {!! Form::select('id_category',['1' => 'รับปริญญา', '2' => 'ภาพบุคคล/แฟชั่น', '3' => 'งานแต่งงาน', '4' => 'พรีเวดดิ้ง', '5' => 'งานอีเวนต์', '6' => 'สถาปัตยกรรม', '7' => 'สินค้า/อาหาร'],null,['class'=>'form-control select_search'],['placeholder' => 'เลือกประเภทงาน...']) !!}
            </div>
    </div>
    <div class="row bottom_fixed">
        <div class="col">
            <a 	class="btn btn_color btn_layout_bottom" 
                href="{{ url("photographer/show/{$album->id}/destroy/") }}" class="btn" id="destroyalbum" >
                ลบอัลบั้ม
            </a>  
        </div>
        <div class="col">
            {!! Form::submit('บันทึก',['class' => 'btn_color btn_bottom']) !!}
        </div>
    </div>

    {!! Form::close() !!}

@stop
