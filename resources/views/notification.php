<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 

</head>
<body>

    <nav>
        <div class="container" style="height:100%;">
            <div class="row" style="height:100%;">
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/index'">
                    <img class="menu_list" src="assets/image/home-button.svg">
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/search'">
                    <img class="menu_list" src="assets/image/search.svg">
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/chatchannel'">
                    <img class="menu_list" src="assets/image/speech-bubbles.svg" >
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/notification'">
                    <img class="menu_list_active" src="assets/image/circle.svg">
                    <img class="menu_list" src="assets/image/notification.svg" >
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/profileEmpoyer'">
                    <img class="menu_list" src="assets/image/friend.svg" >
                </button>
                </div>
            </div>
        </div>
    </nav>

    <section style="height:60px;"></section>

    <div class="container">
        
        <div class="row" style="margin:10px auto;">
            <div class="col-12" style="font-size:10px; background:#37ECBA30; padding-top:15px; margin: 0px auto; border-radius:10px; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                <div class="row">
                    <div class="col-12" >
                        <span style="font-size:10px;">วันนี้</span><br>
                        <span style="font-size:14px;">Username ตอบรับออเดอร์ว่าจ้างของคุณแล้ว</span>
                    </div>
                    <div class="col-12" style="text-align:center;">
                        <button class="btn_color" onclick="window.location.href='/listpayment'">ชำระเงิน</button>
                    </div>
            </div>
            </div>
        </div>
        <div class="row" style="margin:10px auto;">
            <div class="col-12" style="font-size:10px; background: #fff; padding-top:15px;margin: 0px auto; border-radius:10px; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                <div class="row">
                    <div class="col-12" >
                        <span style="font-size:10px;">วันนี้</span><br>
                        <span style="font-size:14px;">คุณได้ส่งคำขอจ้างงาน Username</span>
                    </div>
                    <div class="col-12" style="text-align:center;">
                        <button class="btn_color" style="background:#72AFD3;">รายละเอียด</button>
                    </div>
            </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>