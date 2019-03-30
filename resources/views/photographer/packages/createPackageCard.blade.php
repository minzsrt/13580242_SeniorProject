@extends('layouts.mainprofile')
@section('page_title', 'Craete Package')
@section('link_back', '/profile/'.Auth::user()->username)
@section('content')

<form action="createPackageCard/store" method="post">
{{ csrf_field() }}

    <div class="col-6">
        <h3 class="headder_text" style="padding: 5px;">สร้างการ์ดค่าบริการ</h3>
    </div>

    <div class="container">
    <div class="row">
            <div class="col-md-12 margin_top10">
                <span class="all_more_link">รูปแบบงาน</span>
                    {!! Form::select('id_formattime', $formattime, null, ['class' => 'form-control select_search']) !!}
            </div>
            <div class="col-md-12 margin_top10">
                <span class="all_more_link">ราคา</span>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        {!! Form::number('price', null, ['class'=>'form-control input_box']) !!}
                        <div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 margin_top10">
                <span class="all_more_link">สิ่งที่ลูกค้าจะได้รับ</span>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        {!! Form::textarea('detail',null,['class'=>'form-control textarea_edit']) !!}
                        <div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 margin_top10">
                <span class="all_more_link">การจัดส่ง</span>
                <div class="row form-group" id="radioBtn">
                <a class="col" data-toggle="shipping" data-title="1">
                    <label class="container_radio shadownone">
                        <div class="row height60">
                            <div class="col padtop20">
                                <h3 class="fontsize14">มีการจัดส่ง</h3>
                            </div>
                        </div>
                        <input type="radio" name="radio" checked>
                        <span class="checkmark"></span>
                    </label>
                </a>
                <a class="col" data-toggle="shipping" data-title="0">
                    <label class="container_radio shadownone">
                        <div class="row height60">
                            <div class="col padtop20">
                                <h3 class="fontsize14">ไม่มีการจัดส่ง</h3>
                            </div>
                        </div>
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </a>
                <input type="hidden" name="shipping" id="shipping" value="1">
            </div>
            </div>
            

           
    </div>

    <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
    <input type="hidden" name="id_category" value="{{$package_card->id_category}}">

    <section style="height:250px;"></section>

    <nav class="wrapcontent container nav_bottom nav_bottom_profile" style="box-shadow: none;">
        <div class="row">
            <div class="col" style="display: inherit; padding-top:10px;">
            </div>
            <div class="col" style="display: inherit; padding-top:10px;">
                <button  type="submit" class="btn_color btn_bottom color_white" style="width:100%; margin:0;">สร้าง</button>
            </div>
        </div>
    </nav>

</form>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script language="javascript" type="text/javascript">
    jQuery(function($) {

        $('#radioBtn a').on('click', function(){
            var sel = $(this).data('title');
            var tog = $(this).data('toggle');
            $('#'+tog).prop('value', sel);
            
            $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]');
            $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]');
        });
    });
</script>
@stop
