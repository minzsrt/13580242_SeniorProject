<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Step 5</title>
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
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <span class="all_more_link">สถานที่</span>
        <div class="container">
        <div class="row maps_wrap">
            <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5670.061102641878!2d100.54740447622444!3d13.912959569889924!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe45d7fa6ac93bec8!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lio4Li04Lil4Lib4Liy4LiB4LijIOC4p-C4tOC4l-C4ouC4suC5gOC4guC4leC4i-C4tOC4leC4teC5ieC5geC4hOC4oeC4m-C4seC4qiDguYDguKHguLfguK3guIfguJfguK3guIfguJjguLLguJnguLU!5e0!3m2!1sen!2sth!4v1548551990806" width="800" frameborder="0"  allowfullscreen>
            </iframe>
        </div>
        </div>
        
        <nav class="container nav_bottom">
        <div class="row">
            <div class="col">
                <button type="submit" class="btn_color" onclick="window.location.href='/orderstep4'" style="background:#fff; border:1px solid #72AFD3; color:#72AFD3; width:100%; margin:0;">กลับ</button>
            </div>
            <div class="col">
                <button type="submit" class="btn_color" onclick="window.location.href='/orderstep6'" style="background:#72AFD3; width:100%; margin:0;">ต่อไป</button>
            </div>
        </div>
        </nav>

    </div>

</body>
</html>