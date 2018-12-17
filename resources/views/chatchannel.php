<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chat Channel</title>
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
                    <img class="menu_list_active" src="assets/image/circle.svg">
                    <img class="menu_list" src="assets/image/speech-bubbles.svg" >
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/notification'">
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
        <div class="row" style="padding: 15px; border-bottom: 1px solid rgba(0,0,0,0.1);">
            <div class="col-2">
                <div style="width:40px; height:40px; border-radius:20px; overflow: hidden; text-align:center;">
                    <img src="assets/image/avatar04.jpg" style="height:100%;">    
                </div>
            </div>
            <div class="col-10" style="font-size:10px;">
                <div class="row">
                    <div class="col-12" style="font-size:14px;">
                        <span>Username</span>
                    </div>
                    <div class="col-12">
                        <span>masessages text</span>
                    </div>
            </div>
            </div>
        </div>
        <div class="row" style="padding: 15px;  box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
            <div class="col-2">
                <div style="width:40px; height:40px; border-radius:20px; overflow: hidden; text-align:center;">
                    <img src="assets/image/avatar05.jpg" style="height:100%;">    
                </div>
            </div>
            <div class="col-10" style="font-size:10px;">
                <div class="row">
                    <div class="col-12" style="font-size:14px;">
                        <span>Username</span>
                    </div>
                    <div class="col-12">
                        <span>masessages text</span>
                    </div>
            </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>