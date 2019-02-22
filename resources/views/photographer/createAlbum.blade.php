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
<form action="createAlbum/store" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

    <section style="height:60px; padding:20px;">  
            <div class="row">
                <div class="col-1">
                    <button onclick="window.location.href='{{ URL::previous() }}'" class="btn" style="background:#fff;"><</button> 
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
    <!-- <div class="card album_show_wrap_full">
            <div id="dvPreview" class="row" >
                <img src="assets/image/color_aeaeae.svg" id="profile-img-tag" class="card-img-top"/>
            </div>
            <div class="wrap_choose_file">
                <div class="upload-btn-wrapper">
                    <button class="btn_choose"><span class="hastag_album">Choose File...</span></button>
                    <input multiple="multiple" name="photos[]" type="file" id="fileupload"/>
                </div>
            </div>
    </div> -->
            <!-- <div class="row photos" id="photos">
                <h2>Files 1</h2>
                <span class="btn btn-default btn-file">
                    <input type="file" name="photos[]" multiple/>
                </span>
                <br />
                <ul class="fileList"></ul>
            </div> -->

            <div class='file_upload' id='f1'>
            <input name='photos[]' type='file'/>1</div>
            <div id='file_tools'>
                <img src='images/file_add.png' id='add_file' title='Add new input'/>
                <img src='images/file_del.png' id='del_file' title='Delete'/>
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

    <div class="form-group">
        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
    <div>
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type='text/javascript'>
$(document).ready(function(){
	var counter = 2;
	$('#del_file').hide();
	$('img#add_file').click(function(){
		$('#file_tools').before('<div class="file_upload" id="f'+counter+'"><input name="photos[]" type="file">'+counter+'</div>');
		$('#del_file').fadeIn(0);
	counter++;
	});
	$('img#del_file').click(function(){
		if(counter==3){
			$('#del_file').hide();
		}   
		counter--;
		$('#f'+counter).remove();
	});
});
</script>

<script language="javascript" type="text/javascript">
// window.onload = function () {
//     var fileUpload = document.getElementById("fileupload");
//     fileUpload.onchange = function () {
//         if (typeof (FileReader) != "undefined") {
//             var dvPreview = document.getElementById("dvPreview");
//             dvPreview.innerHTML = "";
//             var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
//             for (var i = 0; i < fileUpload.files.length; i++) {
//                 var file = fileUpload.files[i];
//                 if (regex.test(file.name.toLowerCase())) {
//                     var reader = new FileReader();
//                     reader.onload = function (e) {
//                         var img = document.createElement("IMG");
//                         img.className = "album_show_wrap_multi col";
//                         img.src = e.target.result;
//                         dvPreview.appendChild(img);

//                     }
//                     reader.readAsDataURL(file);
//                 } else {
//                     alert(file.name + " is not a valid image file.");
//                     dvPreview.innerHTML = "";
//                     return false;
//                 }
//             }
//         } else {
//             alert("This browser does not support HTML5 FileReader.");
//         }
//     }
// // // };
// $(document).ready(function() {
        
//     $.fn.fileUploader = function (filesToUpload, sectionIdentifier) {
//         var fileIdCounter = 0;
//         this.closest(".photos").change(function (evt) {
//             var output = [];
//             for (var i = 0; i < evt.target.files.length; i++) {
//                 fileIdCounter++;
//                 var file = evt.target.files[i];
//                 var fileId = sectionIdentifier + fileIdCounter;
//                 console.log(file);
//                 // console.log(file.name);
//                 // console.log(file.size);
//                 // console.log(file.tmp_name);
//                 // console.log(file.type);
//                 // console.log(file.error);

//                 filesToUpload.push({
//                     id: fileId,
//                     file: file
//                 });
            
//                 var removeLink = "<a class=\"removeFile\" href=\"#\" data-fileid=\"" + fileId + "\">Remove</a>";

//                 output.push("<li><strong>", escape(file.name), "</strong> - ", file.size, " bytes. &nbsp; &nbsp; ", removeLink, "</li> ");
//             };

//             $(this).children(".fileList")
//                 .append(output.join(""));
//             //reset the input to null - nice little chrome bug!
//             evt.target.value = null;
//         });
//         $(this).on("click", ".removeFile", function (e) {
//             e.preventDefault();
            
//             var fileId = $(this).parent().children("a").data("fileid");            
//             // loop through the files array and check if the name of that file matches FileName
//             // and get the index of the match
//             for (var i = 0; i < filesToUpload.length; ++i) {
//                 if (filesToUpload[i].id === fileId)
//                     filesToUpload.splice(i, 1);
//                 console.log(filesToUpload[i]);
                
//             }
//             $(this).parent().remove();

//         });
//         this.clear = function () {
//             for (var i = 0; i < filesToUpload.length; ++i) {
//                 if (filesToUpload[i].id.indexOf(sectionIdentifier) >= 0)
//                     filesToUpload.splice(i, 1);
//                     console.log(filesToUpload[i]);
//             }
//             $(this).children(".fileList").empty();
//         }
//         return this;
//     };

//     (function () {
//         var filesToUpload = [];

//         var files1Uploader = $("#photos").fileUploader(filesToUpload, "photos");

//         // $("#uploadBtn").click(function (e) {
//         //     e.preventDefault();

//         //     var formData = new FormData();

//         //     for (var i = 0, len = filesToUpload.length; i < len; i++) {
//         //         formData.append("files", filesToUpload[i].file);
                
//         //     }
//         //     // $.ajax({
//         //     //     url: "http://requestb.in/1k0dxvs1",
//         //     //     data: formData,
//         //     //     processData: false,
//         //     //     contentType: false,
//         //     //     type: "POST",
//         //     //     success: function (data) {
//         //     //         alert("DONE");

//         //     //         files1Uploader.clear();
//         //     //     },
//         //     //     error: function (data) {
//         //     //         alert("ERROR - " + data.responseText);
//         //     //     }
//         //     // });
//         // });
//     })()
// });
// </script>

</body>
</html>