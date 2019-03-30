@extends('layouts.mainprofile')
@section('page_title', 'Upload')
@section('linktoback', URL::previous() )
@section('content')

<form action="/createAlbum/{{$album->id}}/upload/store" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

    <div class="col">
        <p class="headder_text" style="padding: 5px;">
        {{$album->name_album}}<br>
        <span class="btn badge color_white fontsize12 category_badge" style="border-radius: 15px;">
        {{$album->category->name_category}}
        </span>
        </p>   
    </div>

    <div class="container">
    <div class="card album_show_wrap_full" style="height:auto !important;">
            <div id="dvPreview">
                <img src="{{url('assets/image/color_aeaeae.svg')}}" id="profile-img-tag" class="card-img-top"/>
            </div>
            <div class="wrap_choose_file">
                <div class="upload-btn-wrapper">
                    <button class="btn_choose"><span class="hastag_album">เพิ่มรูปภาพในอัลบั้มนี้</span></button>
                    <input multiple="multiple" name="photos[]" type="file" id="fileupload"/>
                </div>
            </div>
    </div>
    
    <input name="album_id" type="hidden" value="{{$album->id}}"/>


        <nav class="wrapcontent container nav_bottom">
        <div class="row">
            <div class="col">
                
            </div>
            <div class="col">
                <button type="submit" class="btn_color" style="background:#72AFD3; width:100%; margin:0;">บันทึก</button>
            </div>
        </div>
        </nav>

</form>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
                        img.className = "album_show_wrap_multi";
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
@stop
