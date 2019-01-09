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
    <style>
        .center{
            width:100%;
        }
    </style>
</head>
<body>


<nav>
        <div class="container" style="height:100%;">
            <div class="row" style="height:100%;">
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/index'">
                    <img class="menu_list_active" src="assets/image/circle.svg">
                    <img class="menu_list" src="assets/image/home-button.svg">
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/chatchannel'">
                    <img class="menu_list" src="assets/image/speech-bubbles.svg" >
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/notification'">
                    <img class="menu_list" src="assets/image/notification.svg" >
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/profile_Photographer'">
                    <img class="menu_list" src="assets/image/friend.svg" >
                </button>
                </div>
            </div>
        </div>
</nav>

    <section style="height:60px; padding:20px;">    
    </section>

    <div class="container">
    <div class="row">
    <div class="col">
        <label onclick="window.location.href='/yourBank'" class="container_radio" style="height:60px; background:#37ECBA; margin-top:20px; padding-left:20px;">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    กระเป๋าตังช่างภาพ
                    </div>
                    <div class="col text_right" style="padding-top: 10px;">
                        <h3  style="font-size:14px; padding-right:20px;">600.00 ฿</h3>
                    </div>
                </div>
        </label>
    </div>
    </div>

    <div class="row">
    <div class="col-12">
    <h3 class="headder_text">คิวงานวันนี้</h3>
    </div>
    <div class="col">
        <label class="container_radio" style="height:60px; margin-top:10px; padding-left:20px;">
                <div class="row">
                    <div class="col text_center" style="padding-top: 10px;">
                    ไม่มี
                    </div>
                </div>
        </label>
    </div>
    </div>

    <div class="row">
    <div class="col-12">
    <h3 class="headder_text">คิวงานใกล้จะถึง</h3>
    </div>
    <div class="col-12">
        <label class="container_radio" style="height:auto; margin-top:10px; padding:10px;">
                <div class="row">
                    <div class="col-2 text-center" style="padding-top: 10px; border-right:1px solid #a3a3a3;">
                        27<br>
                        JAN
                    </div>
                    <div class="col" style="padding-top: 10px;">
                        รับปริญญา<br>
                        <span class="all_more_link">Username</span>
                    </div>
                </div>
        </label>
    </div>
    <div class="col-12">
        <label class="container_radio" style="height:auto; margin-top:5px; padding:10px;">
                <div class="row">
                    <div class="col-2 text-center" style="padding-top: 5px; border-right:1px solid #a3a3a3;">
                        31<br>
                        JAN
                    </div>
                    <div class="col" style="padding-top: 10px;">
                        รับปริญญา<br>
                        <span class="all_more_link">Username</span>
                    </div>
                </div>
        </label>
    </div>
    </div>

    <div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>