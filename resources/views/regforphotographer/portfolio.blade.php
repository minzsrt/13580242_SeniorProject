@extends('layouts.main_empty')
@section('page_title', 'Register for a Photographer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="text_center">
                    <h3 class="headder_text margin_box20">
                        {{ __('ลงทะเบียนเป็นช่างภาพ') }}
                    </h3>
                    <span class="">ผลงาน</span>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="container album_multi_wrap"> 
                            <div class="multi_wrap_full">
                                <div class="row none_margin justify-content-center">
                                    <div class="album_multi_wrap_50"> 
                                        <div class="multi_wrap_full">
                                            <div class="card album_show_wrap album_show_rlt">
                                                    <div class="album_show">
                                                        <div id="dvPreview">
                                                        </div>
                                                    </div>
                                                    <div class="wrap_choose_file">
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn_choose"><span class="hastag_album">+</span></button>
                                                            <input multiple="multiple" name="photos[]" type="file" id="fileupload"/>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="album_multi_wrap_50"> 
                                        <div class="multi_wrap_full">
                                            
                                        </div> 
                                    </div>

                                    <div class="album_multi_wrap_50"> 
                                        <div class="multi_wrap_full">
                                            
                                        </div> 
                                    </div>

                                    <div class="album_multi_wrap_50"> 
                                        <div class="multi_wrap_full">
                                            
                                        </div> 
                                    </div>
                                </div>
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
                    </form>
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
