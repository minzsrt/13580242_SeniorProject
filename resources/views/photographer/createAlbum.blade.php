<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Album</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
</head>
<body>
@if ($errors->any())
        {{ implode('', $errors->all(':message')) }}
@endif
{!! Form::open(['url' => 'profile_photographer']) !!}
    <section style="height:60px; padding:20px;">  
            <div class="row">
                <div class="col-1">
                    <button onclick="window.location.href='/profile_photographer'" class="btn" style="background:#fff;"><</button> 
                </div>
                <div class="col-6">
                    <h3 class="headder_text" style="padding: 5px;">สร้างอัลบั้ม</h3>
                </div>
                <div class="col">
                {!! Form::submit('สร้างอัลบั้ม',['class' => 'btn_color btn_color_bar']) !!}
                </div>
            </div>
    </section>

    <div class="container">
    <div class="card album_show_wrap_full">
            <!-- <div class="album_show">
                <img src="assets/image/color_aeaeae.svg" id="profile-img-tag" class="card-img-top"/>
            </div>
            <div class="wrap_choose_file">
                <div class="upload-btn-wrapper">
                    <button class="btn_choose"><span class="hastag_album">Choose Cover Album...</span></button>
                    <input type="file" name="cover_album" id="profile-img"/>
                </div>
            </div> -->
            <div id="dvPreview">
                <img src="assets/image/color_aeaeae.svg" id="profile-img-tag" class="card-img-top"/>
            </div>
            <div class="wrap_choose_file">
                <div class="upload-btn-wrapper">
                    <button class="btn_choose"><span class="hastag_album">Choose File...</span></button>
                    <input multiple="multiple" name="photos[]" type="file" id="fileupload"/>
                </div>
            </div>
    </div>

    

    <div class="row">
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">ชื่ออัลบั้ม</span>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        {!! Form::text('name_album', null, ['class'=>'form-control']) !!}
                        <div>
                    </div>
                </div>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">แท็ก</span>
                {!! Form::select('id_category',['1' => 'รับปริญญา', '2' => 'ภาพบุคคล/แฟชั่น', '3' => 'งานแต่งงาน', '4' => 'พรีเวดดิ้ง', '5' => 'งานอีเวนต์', '6' => 'สถาปัตยกรรม', '7' => 'สินค้า/อาหาร'],null,['class'=>'form-control select_search'],['placeholder' => 'เลือกประเภทงาน...']) !!}
            </div>
        </div>
    </div>
{!! Form::close() !!}

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

</body>
</html>