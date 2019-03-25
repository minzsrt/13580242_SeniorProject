@extends('layouts.mainprofile')
@section('page_title', 'Show')
@section('content')
    <div class="container">

        <p class="headder_text" style="position: relative; padding: 5px;">
        {{$album->name_album}}
        <a class="btn badge bg_dbdbdb color_white" style="position: absolute; right: 0;" data-toggle="modal" data-target="#editAlbum{{$album->id}}">
        <i class="fas fa-pen"></i> แก้ไข
        </a>
        <br>
        <span class="btn badge bg_aeaeae color_white" style="border-radius: 15px;">
        {{$album->category->name_category}}
        </span>
        </p>   

        <div class="wf-container">
            @foreach($photos as $photo)
            <div class="wf-box">
                <a data-fancybox="gallery" href="$photo->name_image">
                    <img class="radius10" src="{{ url($photo->name_image) }}">
                </a>
            </div>
            @endforeach
        </div>


                        <div class="modal fade" id="editAlbum{{$album->id}}" tabindex="-1" role="dialog" aria-labelledby="editAlbum{{$album->id}}Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-info" id="editAlbum{{$album->id}}Label">แก้ไขอัลบั้ม</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::model($album, ['method' => 'POST','action' => ['AlbumsController@update', $username,$album->id],'enctype' => 'multipart/form-data']) !!}
                                {{ csrf_field() }}
                                    <div class="modal-body">
                                            <label for="recipient-name" class="all_more_link">หน้าปกอัลบั้ม:</label>
                                            <div class="card album_show_wrap_full">
                                                <div id="dvPreview">
                                                    <img src="{{url($album->cover_album)}}" id="profile-img-tag" class="card-img-top"/>
                                                </div>
                                                <div class="wrap_choose_file">
                                                    <div class="upload-btn-wrapper">
                                                        <button class="btn_choose"><span class="hastag_album">Choose File...</span></button>
                                                        <input name="cover_album" type="file" id="fileupload"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="all_more_link">ชื่ออัลบั้ม:</label>
                                                {!! Form::text('name_album', null, ['class'=>'form-control']) !!}
                                                <label for="recipient-name" class="all_more_link">แท็ก:</label>
                                                {!! Form::select('id_category', $category, null, ['class' => 'form-control']) !!}
                                            </div>
                                            <a class="btn badge badge-info color_white" href="/createAlbum/{{$album->id}}/upload">
                                            <i class="fas fa-plus"></i> เพิ่มรูปภาพ
                                            </a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-gray-200" data-dismiss="modal">ยกเลิก</button>
                                        <button type="submit" class="btn bg_color_gradient text-white">แก้ไข</button>
                                    </div>
                                {!! Form::close() !!}
                                </div>
                            </div>
                        </div>

        <!-- <section style="height:250px;"></section> -->

    </div>

    <!-- <nav class="container nav_bottom nav_bottom_profile" style="box-shadow: none;">
        <div class="row">
            <div class="col" style="display: inherit; padding-top:10px;">
                <a 	class="btn btn_layout_bottom" 
                    href="{{ url("photographer/show/{$album->id}/destroy/") }}" id="destroyalbum" >
                    ลบอัลบั้ม
                </a>  
            </div>
            <div class="col" style="display: inherit; padding-top:10px;">
                <a href="{{ url("profile/{$username}/album/{$album->id}/edit/") }}" class="btn_color btn_bottom" style="width:100%; margin:0; padding-top:10px;">แก้ไข</a>
            </div>
        </div>
    </nav> -->

<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/responsive_waterfall.js') }}"></script>
<script>
    var waterfall = new Waterfall({ 
        containerSelector: '.wf-container',
        boxSelector: '.wf-box',
        minBoxWidth: 250
    });
</script>
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
