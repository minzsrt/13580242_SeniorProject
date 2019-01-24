<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile Photograpgher</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <style type="text/css">
    html, body {
        height: 100%;
        margin: 0px;
    }
    </style>
</head>
<body>

<div class="container wrap_all">

    <div class="row text_right center_fixed">
        <div class="col">
            <h1 class="headder_text color_fff">ค้นหาช่างภาพได้ง่ายๆกับเรา</h1>
            <h3 class="all_more_link color_fff">ช่างภาพฝีมือดีรอคุณอยู่</h3>
        </div>
    </div>

    <div class="row bottom_fixed">
        <div class="col">
            <a class="btn btn_color btn_layout_bottom" href="{{ route('register') }}">สร้างบัญชีของคุณ</a>
        </div>
        <div class="col">
            <a class="btn btn_color btn_bottom" href="{{ route('login') }}">เข้าสู่ระบบ</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>