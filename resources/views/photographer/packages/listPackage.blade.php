<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Package</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>
<body>

    <section style="height:60px; padding:20px;">    
        <button class="btn_layout_back" onclick="window.location.href='/profile_Photographer'">กลับ</button> 
    </section>
 
    <div class="container wrap_container_head">
        <div class="row">
            <div class="col">
                <h3 class="headder_text">ค่าบริการถ่ายภาพรับปริญญา</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card" style="padding: 0; margin:20px auto; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
            <div style="width:100%; height:250px; overflow: hidden; position:relative; border-top-left-radius: 10px;  border-top-right-radius: 10px;">
                <img class="card-img-top" src="assets/image/img_show03.jpg">    
            </div>
            <div class="card-body" style="padding:20px">
                <div class="row">
                    <div class="col-8" style="font-size:10px;">
                        <h3  style="font-size:18px; padding-right:10px;">ถ่ายภาพรายชั่วโมง</h3>
                    </div>
                    <div class="col-4 text_right">
                        <h3  style="font-size:18px; padding-right:10px;">900 ฿</h3>
                    </div>
                </div>
                <div class="row">
                    <p class="col detail_pack">
                    <span>สิ่งที่ได้รับ</span><br>
                    จำนวน 10 รูป ปรับแต่งไฟล์ภาพ แสง สี ตามความเหมาะสม
                    </p>
                </div>
            </div>
        </div>
        <div class="card" style="border:0; margin:10px auto; ">
       <button class="btn" onclick="window.location.href='/createPackageCard'" style="height:60px; padding: 0; border-radius: 10px; border: 1px dashed #a3a3a3; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
        <i class="fas fa-plus-circle"></i>
       </button> 
    </div>
    </div>
    
    <nav class="container nav_bottom nav_bottom">
        <div class="row">
            <div class="col">
                <button type="submit" onclick="window.location.href='profile_Photographer'" class="btn_color" style="background:#72AFD3; width:100%; margin:0;">บันทึก</button>
            </div>
        </div>
        </nav>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        
        $('.center').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '100px',
                slidesToShow: 1
            }
            }
        ]
        });
    });
  </script>
</body>
</html>