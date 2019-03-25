@extends('layouts.main')
@section('page_title', 'Deposit Account')
@section('link_back', '/')
@section('content')
{!! Form::model($credit, ['url' => ['credits/'.Auth::user()->username.'/update'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
{{ csrf_field() }}
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h3 class="headder_text">บัญชีและการเงิน</h3>
            </div>
        </div>  
        <div class="row">
            <div class="col-12">
                <label class="review_box container" style="padding: 20px; width:100%;">
                        <div class="row">
                            <div class="col">
                            <span class="all_more_link">บัญชีธนาคาร</span> 
                           
                            {!! Form::select('id_bank', $banks, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <span class="all_more_link">เลขบัญชี</span> 
                            {!! Form::number('deposit_account_number', null, ['class'=>'form-control input_box']) !!} 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <span class="all_more_link">รูปสมุดบัญชีหน้าแรก</span> 
                            <div class="album_show_wrap_full" style="height:auto !important;">
                                    <div id="dvPreview" class="row" >
                                        <img src="{{url($credit->book_bank_copy)}}" id="profile-img-tag" class="card-img-top" style="height:100% !important;"/>
                                    </div>
                                    <div class="wrap_choose_file">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn_choose"><span class="hastag_album">Choose File...</span></button>
                                            <input name="book_bank_copy" type="file" id="fileupload"/>
                                        </div>
                                    </div>
                            </div>
                            </div>
                        </div>
                        <input type="hidden" name="id_photographer" value="{{Auth::user()->id}}">
                        <div class="row">
                            <div class="col-12 text_center">
                                <button type="submit" class="btn_color">บันทึก</button>
                            </div>
                        </div>
                </label>
            </div>
        </div>
    <div>
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
