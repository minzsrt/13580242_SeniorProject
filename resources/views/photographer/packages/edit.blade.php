@extends('layouts.main3')
@section('page_title', 'Edit')
@section('btn_name', 'แก้ไขค่าบริการ')
@section('linktoback', '/listPackage')
@section('content')

{!! Form::model($package_card, ['method' => 'GET','action' => ['PackageCardsController@update', $package_card->id]]) !!}

    <div class="container">
        <div class="row">
                <div class="col-md">
                    <span class="all_more_link">รูปแบบงาน</span>
                    <div class="form-group">
                    {!! Form::select('id_formattime',['1' => 'ครึ่งวัน', '2' => 'เต็มวัน', '3' => 'รายชั่วโมง'],null,['class'=>'form-control select_search'],['placeholder' => 'เลือกรูปแบบงาน...']) !!}
                    </div>
                </div>
                <div class="col-md">
                    <span class="all_more_link">ราคา</span>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::number('price', null, ['class'=>'form-control']) !!} 
                            <div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <span class="all_more_link">สิ่งที่ลูกค้าจะได้รับ</span>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::textarea('detail',null,['class'=>'form-control textarea_edit']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <span class="all_more_link">การจัดส่ง</span>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ Form::radio('shipping', 1) }} Yes
                                {{ Form::radio('shipping', 0) }} No
                            <div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <span class="all_more_link">ค่าจัดส่ง</span>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::number('shipping_cost',null,['class'=>'form-control']) !!}
                            <div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                {!! Form::hidden('id_category',1,['class'=>'form-control']) !!}
                </div>
        </div>
    </div>

    <section style="height:60px;"></section>
    
    <div class="row bottom_fixed">
        <div class="col">
                <a 	class="btn btn_color btn_layout_bottom" 
                href="{{ url("photographer/packages/show/{$package_card->id}/destroy") }}" class="btn" id="destroypackagecard" >
                    ลบการ์ด
                </a>    
        </div>
        <div class="col">
            {!! Form::submit('บันทึก',['class' => 'btn_color btn_bottom']) !!}
        </div>
    </div>
    
{!! Form::close() !!}

@stop
