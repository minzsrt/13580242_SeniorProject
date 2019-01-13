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
{!! Form::open(['url' => 'profilePhotographer']) !!}
    <section style="height:60px; padding:20px;">  
            <div class="row">
                <div class="col-1">
                    <button class="btn" style="background:#fff;"><</button> 
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
    <div class="card album_show_wrap">
            <div class="album_show">
                <img class="card-img-top" src="assets/image/img_show03.jpg">    
            </div>
    </div>

    <div class="row">
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">ชื่ออัลบั้ม</span>
                <div class="row">
                    <div class="col">
                    <div class="form-group">
                    {!! Form::text('caption', null, ['class'=>'form-control']) !!}
                    <div>
                        <!-- <textarea style="width:100%; height:80px; border-radius: 10px; border: 1px solid #ccc;">
                        </textarea> -->
                    </div>
                </div>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">แท็ก</span>
                <select class="select_search" style="">
                    <option selected>เลือกประเภทงาน...</option>
                    <option value="1">รับปริญญา</option>
                    <option value="2">ภาพบุคคล/แฟชั่น</option>
                    <option value="3">งานแต่งงาน</option>
                    <option value="1">พรีเวดดิ้ง</option>
                    <option value="2">งานอีเวนต์</option>
                    <option value="3">สถาปัตยกรรม</option>
                    <option value="3">สินค้า/อาหาร</option>
                </select>
            </div>
        </div>
    </div>
    {!! Form::close() !!}


</body>
</html>