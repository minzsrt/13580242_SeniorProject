@extends('layouts.mainprofile')
@section('page_title', 'Edit')
@section('btn_name', 'แก้ไขอัลบั้ม')
@section('linktoback', URL::previous() )
@section('content')

<form action="createAlbum/store" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

    <div class="col-6">
        <h3 class="headder_text" style="padding: 5px;">สร้างอัลบั้ม</h3>
    </div>

    <div class="container">
    <span class="all_more_link">หน้าปกอัลบั้ม</span>
    <div class="card album_show_wrap_full" style="height:auto !important;">
            <div id="dvPreview">
                <img src="assets/image/color_aeaeae.svg" id="profile-img-tag" class="card-img-top"/>
            </div>
            <div class="wrap_choose_file">
                <div class="upload-btn-wrapper">
                    <button class="btn_choose"><span class="hastag_album">Choose File...</span></button>
                    <input name="cover_album" type="file" id="fileupload"/>
                    <!-- <input multiple="multiple" name="photos[]" type="file" id="fileupload"/> -->
                </div>
            </div>
    </div>

    <div class="row">
            <div class="col-md margin_top10">
                <span class="all_more_link">ชื่ออัลบั้ม</span>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        {!! Form::text('name_album', null, ['class'=>'form-control']) !!}
                        <div>
                    </div>
                </div>
            </div>
            <div class="col-md margin_top10">
                <span class="all_more_link">แท็ก</span>
                {!! Form::select('id_category',['1' => 'รับปริญญา', '2' => 'ภาพบุคคล/แฟชั่น', '3' => 'งานแต่งงาน', '4' => 'พรีเวดดิ้ง', '5' => 'งานอีเวนต์', '6' => 'สถาปัตยกรรม', '7' => 'สินค้า/อาหาร'],null,['class'=>'form-control select_search'],['placeholder' => 'เลือกประเภทงาน...']) !!}
            </div>
        </div>
    </div>

    <input type="hidden" name="id_user" value="{{Auth::user()->id}}">

    <section style="height:250px;"></section>

    <nav class="container nav_bottom">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <button type="submit" class="btn_color" style="margin:0;">ต่อไป</button>
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
