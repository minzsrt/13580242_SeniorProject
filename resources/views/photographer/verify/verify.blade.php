@extends('layouts.mainprofile')
@section('page_title', 'Verify')
@section('link_back', '/')
@section('content')


{!! Form::model($checkverify, ['url' => ['verify/'.Auth::user()->username.'/update'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
{{ csrf_field() }}

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="headder_text">ยืนยันตัวตน</h3>
            </div>
        </div>
        <div class="row">
                <div class="col-md">
                    <span class="all_more_link">สําเนาบัตรประจําตัวประชาชน</span>
                    <p class="all_more_link">
                    อัพโหลดรูปบัตรประชาชนและใบหน้าเจ้าของบัตร ภาพบัตรต้องเห็นรายละเอียดชัดเจน โดยเฉพาะเลขที่บัตร รูปต้องเป็นเจ้าของบัตรถือบัตรประชาชนของตนเองเท่านั้น
                    </p>
                </div>
                <div class="col-md">
                    @if($checkverify->id_status == '4')
                        <div class="card album_show_wrap_full" style="height:auto !important;">
                            <div id="dvPreview">
                                <img src="/assets/image/color_aeaeae.svg" id="profile-img-tag" class="card-img-top"/>
                            </div>
                            <div class="wrap_choose_file">
                                <div class="upload-btn-wrapper">
                                    <button class="btn_choose">
                                        <span class="hastag_album">Choose File...</span>
                                    </button>
                                    <input name="copy_id_card" type="file" id="fileupload"/>
                                </div>
                            </div>
                        </div>
                    @else
                    <div class="card album_show_wrap_full" style="height:auto !important;">
                        <div id="dvPreview">
                            <img src="{{ url($checkverify->copy_id_card) }}" id="profile-img-tag" class="card-img-top" style="opacity:0.5;"/>
                        </div>
                        <div class="wrap_choose_file">
                            @if($checkverify->id_status == '1')
                            <div class="upload-btn-wrapper">
                                <button class="btn_choose">
                                    <span class="hastag_album text-danger fontsize18" style="border-color:red;">
                                    <i class="fas fa-clock"></i> รอการตรวจสอบ
                                    </span>
                                </button>
                            </div>
                            @elseif($checkverify->id_status == '2')
                            <div class="upload-btn-wrapper">
                                <button class="btn_choose">
                                    <span class="hastag_album text-success fontsize18" style="border-color:green;">
                                    <i class="fas fa-check-circle"></i> ยืนยันตัวตนแล้ว
                                    </span>
                                </button>
                            </div>
                            @elseif($checkverify->id_status == '3')
                            <div class="upload-btn-wrapper">
                                <button class="btn_choose">
                                    <span class="hastag_album text-danger fontsize18" style="border-color:red;">
                                    <i class="fas fa-times-circle"></i> ปฏิเสธการยืนยันตัวตน
                                    </span>
                                </button>
                                <input name="copy_id_card" type="file" id="fileupload"/>
                            </div>
                            @endif
                        </div>
                    </div>
                @endif
                </div>

                <input name="id_status" type="hidden" value="1"/>
                <input name="id_user" type="hidden" value="{{Auth::user()->id}}"/>
                
                <div class="col-md text_center">
                    @if($checkverify->id_status == '4')
                        <button type="submit" class="btn btn_color">
                        ยืนยันตัวตน
                        </button>
                    @else
                        @if($checkverify->id_status == '3')
                        <span class="all_more_link">กรุณาอัปโหลดไฟล์เพื่อยืนยันตัวตนอีกครั้ง</span><br>
                        <button type="submit" class="btn btn_color">
                        ยืนยันตัวตนอีกครั้ง
                        </button>
                        @endif
                    @endif
                </div>
                
        </div>
    </div>
</form>

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