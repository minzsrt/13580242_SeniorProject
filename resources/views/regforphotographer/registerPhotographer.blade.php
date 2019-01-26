@extends('layouts.main_empty')
@section('page_title', 'Register for a Photographer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="row">
                    <img class="logox2" src="assets/image/logo.png">    
                </div>

                <div class="text_center">
                    <h3 class="headder_text margin_top20">
                        {{ __('ลงทะเบียนเป็นช่างภาพ') }}
                    </h3>
                    <!-- <span class="">ข้อมูลเบื้องต้น</span> -->
                </div>

                <div class="card-body">
                    {!! Form::open(['url' => 'invitePhotographer']) !!}
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" type="text" class="input_box form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="ชื่อ-นามสกุลจริง" required>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="idcard" type="text" class="input_box form-control{{ $errors->has('idcard') ? ' is-invalid' : '' }}" name="idcard" value="{{ old('idcard') }}" placeholder="เลขที่บัตรประจําตัวประชาชน" required>
                                @if ($errors->has('idcard'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idcard') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input placeholder="วันเกิด" class="form-control input_box" type="text" onfocus="(this.type='date')" name="birthday">  
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                {!! Form::select('sex',['ชาย' => 'ชาย', 'หญิง' => 'หญิง'],null,['class'=>'form-control select_search' ,'placeholder' => 'เพศของคุณ']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                {!! Form::text('address', null, ['class'=>'form-control input_box','placeholder' => 'ที่อยู่']) !!} 
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="form-group col">
                                {!! Form::text('sub_district', null, ['class'=>'form-control input_box','placeholder' => 'ตำบล']) !!} 
                            </div>
                            <div class="form-group col">
                                {!! Form::text('district', null, ['class'=>'form-control input_box','placeholder' => 'อำเภอ']) !!} 
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                {!! Form::text('province', null, ['class'=>'form-control input_box','placeholder' => 'จังหวัด']) !!} 
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                {!! Form::text('zipcode', null, ['class'=>'form-control input_box','placeholder' => 'รหัสไปรษณีย์']) !!} 
                            </div>
                        </div>

                        <div class="form-group row margin_bottom20">
                            <div class="col-md-6">
                                {!! Form::text('phone', null, ['class'=>'form-control input_box','placeholder' => 'เบอร์ติดต่อ']) !!} 
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input class="form-control input_box" type="hidden" name="id_user" value="{{Auth::user()->id}}">  
                            </div>
                        </div>

                        <div class="row bottom_fixed">
                            <div class="col">
                            </div>
                            <div class="form-group col">
                                <button type="submit" class="btn_color btn_color_employ btn_width">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<!-- <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
        
        var cars = ["BMW", "Volvo", "Saab", "Ford"];
        var i, len, text;
        for (i = 0, len = cars.length, text = ""; i < len; i++)
        {
        text += cars[i] + "<br>";
        }
        document.getElementById("demo").innerHTML = text;

    }
    $("#profile-img").change(function(){
        readURL(this);
    });

</script> -->

<script language="javascript" type="text/javascript">
window.onload = function () {
    var fileUpload = document.getElementById("fileupload");
    fileUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = document.getElementById("dvPreview");
            dvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            for (var i = 0; i < fileUpload.files.length; i++) {
                var file = fileUpload.files[i];
                if (regex.test(file.name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                        img.className = "img_show_multi col-6";
                        img.src = e.target.result;
                        dvPreview.appendChild(img);

                    }
                    reader.readAsDataURL(file);
                } else {
                    alert(file.name + " is not a valid image file.");
                    dvPreview.innerHTML = "";
                    return false;
                }
            }
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    }
};
</script>


@endsection
