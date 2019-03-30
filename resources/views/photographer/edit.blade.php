@extends('layouts.mainprofile')
@section('page_title', 'Edit Album '.$album->name_album)
@section('link_back', '/profile/'.$album->user->username.'/album/'.$album->id)
@section('content')

    <div class="container">

        @if (session('alertedit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('alertedit') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

        @if (session('alertdelete'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('alertdelete') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

        <p class="headder_text" style="position: relative; padding: 5px;">
        {{$album->name_album}}
        <a class="btn badge badge-info color_white" style="position: absolute; right: 0;" href="/createAlbum/{{$album->id}}/upload">
            <i class="fas fa-plus"></i> เพิ่มรูปภาพ
        </a>
        <br>
        <span class="btn badge color_white fontsize12 category_badge" style="border-radius: 15px;">
        {{$album->category->name_category}}
        </span>
        </p>   
    </div>

    <div class="container">
        @if( $photos->count() == 0 )

        <div class="row">
            <div class="col-md">
                <div class="messageicon">
                    <img src="{{url('assets/image/album.svg')}}">
                </div>
            </div>
            <div class="col-md text_center">
                <span class="all_more_link">ไม่มีรูปภาพ</span> 
            </div>
        </div>

        @else
        <div class="wf-container">
                @foreach($photos as $photo)
                <div class="wf-box container_button_img">
                    <img class="radius10" src="{{ url($photo->name_image) }}">
                    <a data-toggle="modal" data-target="#deleteModal{{$photo->id}}" class="btn btn-delete color_AEAEAE"><i class="far fa-trash-alt"></i></a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="deleteModal{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$photo->id}}" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <span class="all_more_link fontsize14" id="deleteModalLabel{{$photo->id}}">ต้องการลบรูปนี้</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_color bg_72AFD3_line color_72AFD3" data-dismiss="modal">ยกเลิก</button>
                            <button type="button" class="btn btn_color bg_72AFD3" onclick="window.location.href='/profile/{{Auth::user()->username}}/album/{{$photo->id}}/destroyimage'">ยืนยัน</button>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
        @endif

    </div>

    <div class="container">
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-gray-200" data-dismiss="modal">ยกเลิก</button>
                                        <button type="submit" class="btn bg_color_gradient text-white">บันทึก</button>
                                    </div>
                                {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
    </div>                    


    <nav class="wrapcontent container nav_bottom nav_bottom_profile" style="box-shadow: none;">
        <div class="row">
            <div class="col" style="display: inherit; padding-top:10px;">
                <a 	class="btn btn_layout_bottom" 
                    href="/profile/{{Auth::user()->username}}/album/{{$album->id}}/destroy" id="destroyalbum" >
                    ลบอัลบั้ม
                </a>  
            </div>
            <div class="col" style="display: inherit; padding-top:10px;">
                <a data-toggle="modal" data-target="#editAlbum{{$album->id}}" class="btn_color btn_bottom color_white" style="width:100%; margin:0; padding-top:10px;">แก้ไขอัลบั้ม</a>
            </div>
        </div>
    </nav>

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
