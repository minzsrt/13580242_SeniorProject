<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Step 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 

</head>
<body>

    <section class="text_right" style="height:60px; padding:20px;">    
        <a style="cursor:pointer; color:#aeaeae;" onclick="window.location.href='/index'"><i class="fas fa-times-circle"></i></a>
    </section>

    <form action="/orderstep2" method="post">
    {{ csrf_field() }}

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="order_img_profile">
                    <img src="assets/image/avatar01.jpg">    
                </div>
                <h3 class="headder_text text_center" style="padding: 5px; font-size:14px;">จ้างงาน Username</h3>
            </div>
        </div>
        <div class="row margin_bomtom20">
            <div class="col">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <span class="all_more_link">รูปแบบงาน</span>

        <div class="row">
            <div class="container form-group input-group">
                        <div id="radioBtn" class="row">
                            <a class="col-md" data-toggle="id_formattime" data-title="1">
                            <label class="container_radio">
                            <div class="row">
                                <div class="col" style="font-size: 18px;">
                                    <h3  style="font-size:18px;">ถ่ายภาพรายชั่วโมง</h3>
                                </div>
                                <div class="col text_right">
                                    <h3  style="font-size:18px; padding-right:20px;">900 ฿</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="font-size: 18px;">
                                    <span class="all_more_link">
                                        สิ่งที่ได้รับ
                                    </span>
                                    <p class="all_more_link">
                                    จำนวน 10 รูป ปรับแต่งไฟล์ภาพ แสง สี ตามความเหมาะสม
                                    </p>
                                </div>
                            </div>
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                            </label>
                            </a>

                            <a class="col-md" data-toggle="id_formattime" data-title="2">
                            <label class="container_radio">
                            <div class="row">
                                <div class="col" style="font-size: 18px;">
                                    <h3  style="font-size:18px;">ถ่ายภาพครึ่งวัน</h3>
                                </div>
                                <div class="col text_right">
                                    <h3  style="font-size:18px; padding-right:20px;">900 ฿</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="font-size: 18px;">
                                    <span class="all_more_link">
                                        สิ่งที่ได้รับ
                                    </span>
                                    <p class="all_more_link">
                                    จำนวน 10 รูป ปรับแต่งไฟล์ภาพ แสง สี ตามความเหมาะสม
                                    </p>
                                </div>
                            </div>
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                            </label>
                            </a>

                            <a class="col-md" data-toggle="id_formattime" data-title="3">
                            <label class="container_radio">
                            <div class="row">
                                <div class="col" style="font-size: 18px;">
                                    <h3  style="font-size:18px;">ถ่ายภาพเต็มวัน</h3>
                                </div>
                                <div class="col text_right">
                                    <h3  style="font-size:18px; padding-right:20px;">900 ฿</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="font-size: 18px;">
                                    <span class="all_more_link">
                                        สิ่งที่ได้รับ
                                    </span>
                                    <p class="all_more_link">
                                    จำนวน 10 รูป ปรับแต่งไฟล์ภาพ แสง สี ตามความเหมาะสม
                                    </p>
                                </div>
                            </div>
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                            </label>
                            </a>
                        </div>
    				    <input type="text" name="id_formattime" id="id_formattime">
            </div>
        </div>
        <nav class="container nav_bottom nav_bottom">
        <div class="row">
            <div class="col">
                <button type="submit" class="btn_color" onclick="window.location.href='/orderstep1'" style="background:#fff; border:1px solid #72AFD3; color:#72AFD3; width:100%; margin:0;">กลับ</button>
            </div>
            <div class="col">
                <button type="submit" class="btn_color" onclick="window.location.href='/orderstep3'" style="background:#72AFD3; width:100%; margin:0;">ต่อไป</button>
            </div>
        </div>
        </nav>

    </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
    jQuery(function($) {


        $('#radioBtn a').on('click', function(){
            var sel = $(this).data('title');
            var tog = $(this).data('toggle');
            $('#'+tog).prop('value', sel);
            
            $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]');
            $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]');
        });
    });
    </script>


</body>
</html>