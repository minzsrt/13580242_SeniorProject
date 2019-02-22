
@extends('layouts.main')

@section('content')
    <div class="container">
    {!! Form::model($user, ['route' => ['auth.update'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="container">
        <div class="row">

                <div class="img_profile" id="PreviewProfile" style="margin:0 auto; border:3px solid #72afd3;">
                    <img src="{{ url(Auth::user()->avatar) }}" style="width:auto !important; height: 100%;">   
                </div>

                <div class="col-12" style="height:40px;">
                    <div class="wrap_choose_file"  style="left:0;">
                        <div class="upload-btn-wrapper">
                            <button class="btn_choose"><span class="hastag_album" style="color:#adadad; border:0.5px solid #adadad;">เปลี่ยนภาพโปรไฟล์</span></button>
                            <input name="avatar" type="file" id="fileupload"/>
                        </div>
                    </div>
                </div>

                <div class="col-md" style="margin-top:10px;">
                    <span class="all_more_link">ชื่อผู้ใช้</span>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                            {!! Form::text('username', null, ['class' => 'form-control input_box', 'id' => 'username']) !!}
                            @if($errors)
                                @foreach($errors->all() as $error)
                                    <span class="all_more_link" style="color:red;">@if ($loop->first) {{ $error }} @endif</span>
                                @endforeach
                            @endif
                            <div>
                        </div>
                    </div>
                </div>
                <div class="col-md" style="margin-top:10px;">
                    <span class="all_more_link">อีเมล</span>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                            {!! Form::text('email', null, ['class' => 'form-control input_box', 'id' => 'email']) !!}
                            @if($errors)
                                @foreach($errors->all() as $error)
                                    <span class="all_more_link" style="color:red;">@if ($loop->last) {{ $error }} @endif</span>
                                @endforeach
                            @endif
                            <div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md text_center" style="margin-top:10px;">
                    {!! Form::submit('บันทึก', ['class' => 'btn btn_color','style' => 'background:#72AFD3; width:100%; margin:0;']) !!}
                </div>

        </div>        
    </div>
    {!! Form::close() !!}
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script language="javascript" type="text/javascript">
window.onload = function () {
    var fileUpload = document.getElementById("fileupload");
    fileUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = document.getElementById("PreviewProfile");
            dvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            for (var i = 0; i < fileUpload.files.length; i++) {
                var file = fileUpload.files[i];
                if (regex.test(file.name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                        // img.className = "album_show_wrap_multi col";
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