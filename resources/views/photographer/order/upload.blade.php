@extends('layouts.mainprofile')
@section('page_title', 'Upload')
@section('link_back', '/order/'.$order->id )
@section('content')

<form action="/order/{{$order->id}}/uploadfile/store" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

    <div class="col">
        <span class="headder_text">อัปโหลดไฟล์ออเดอร์ #{{$order->id}}</span><br>
        <span class="btn badge color_white fontsize12 category_badge">
        {{$order->category->name_category}}
        </span><br>
        <hr>
        <!-- <span class="all_more_link">ผู้ว่าจ้าง</span>
        <br>
        <span class="headder_text">{{$order->employer->username}}</span>
        <br> -->
        <span class="all_more_link">
        อนุญาตให้อัปโหลดไฟล์ .zip .jpg .png ขนาดไม่เกิน 250 MB
        </span>
    </div>

    <div class="container">
    <div class="card album_show_wrap_full" style="height:auto !important;">
            <div id="dvPreview">
                <img src="{{url('assets/image/color_aeaeae.svg')}}" id="profile-img-tag" class="card-img-top"/>
            </div>
            <div class="wrap_choose_file">
                <div class="upload-btn-wrapper">
                    <button class="btn_choose"><span class="hastag_album">เพิ่มรูปภาพ</span></button>
                    <input multiple="multiple" name="filenames[]" type="file" id="fileupload"/>
                </div>
            </div> 
    </div>
    
    <input name="id_order" type="hidden" value="{{$order->id}}"/>

        <nav class="wrapcontent container nav_bottom">
        <div class="row">
            <div class="col">
                
            </div>
            <div class="col">
                <button type="submit" class="btn_color" style="background:#72AFD3; width:100%; margin:0;">อัปโหลด</button>
            </div>
        </div>
        </nav>

</form>


 	<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
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
