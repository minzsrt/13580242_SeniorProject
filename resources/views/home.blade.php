<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register or Login</title>
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

    <!-- animsition.css -->
    <link rel="stylesheet" href="css/animsition.min.css">

</head>
<body class="animsition">

<div class="container wrap_all ">

    <div class="row top_fixed">
        <div class="col">
            <a class="btn btn_layout_line_back animsition-link" href="/">กลับ</a>
        </div>
    </div>


    <div class="row text_right center_fixed">
        <div class="col">
            <h1 class="headder_text color_white">ค้นหาช่างภาพได้ง่ายๆกับเรา</h1>
            <h3 class="all_more_link color_white">ช่างภาพฝีมือดีรอคุณอยู่</h3>
        </div>
    </div>

    <div class="row bottom_fixed">
        <div class="col">
            <a class="btn btn_color btn_layout_bottom animsition-link" href="{{ route('register') }}">สร้างบัญชีของคุณ</a>
        </div>
        <div class="col">
            <a class="btn btn_color btn_bottom animsition-link" href="{{ route('login') }}">เข้าสู่ระบบ</a>
        </div>
    </div>

    
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- animsition.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/animsition.min.js"></script>
<script>
$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in-left-sm',
    outClass: 'fade-out-left-sm',
    inDuration: 500,
    outDuration: 300,
    linkElement: '.animsition-link',
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
</script>
    
</body>
</html>