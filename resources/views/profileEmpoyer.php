<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ProfileEmpoyer</title>
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
                    <img class="menu_list" src="assets/image/notification.svg" >
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/profileEmpoyer'">
                    <img class="menu_list_active" src="assets/image/circle.svg">
                    <img class="menu_list" src="assets/image/friend.svg" >
                </button>
                </div>
            </div>
        </div>
    </nav>
    
    <section style="height:60px;"></section>

    <div class="container wrap_container_head">
        <div class="row">
            <div class="col-3">
                <div style="width:80px; height:80px; border-radius:40px; overflow: hidden;">
                    <img src="assets/image/avatar01.jpg" style="height:100%;">   
                </div>
            </div>
            <div class="col" style="padding-top:30px;">
                <span>Username</span>
            </div>
            <div class="col text_right" style="padding-top:30px;">
                <button class="btn_layout_edit">แก้ไขโปรไฟล์</button>
            </div>
        </div>
        <ul class="nav nav-tabs row" style="padding:0; margin-bottom:20px;">
            <li class="nav-item col text_center" style="padding:0;">
            <a class="nav-link active" data-toggle="tab" href="#home">
                <img class="menu_list_profile" src="assets/image/heart_layout_black.svg"><br>
                <span class="menu_list_profile_text">Favorite</span>
            </a>
            </li>
            <li class="nav-item col text_center" style="padding:0;">
                <a class="nav-link" data-toggle="tab" href="#menu1">
                    <img class="menu_list_profile" src="assets/image/user.svg"><br>
                    <span class="menu_list_profile_text">Following</span>
                </a>
            </li>
        </ul>

    </div>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active container" id="home">
    <div class="card" style="padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
            <div style="width:100%; height:250px; overflow: hidden; position:relative; border-top-left-radius: 10px;  border-top-right-radius: 10px;">
                <div style="position: absolute; width:100%; padding:10px 0px 10px 10px;">
                    <div style="float:left;">
                        <span style="font-size:10px; border:1px solid #fff; border-radius:20px; padding:3px 8px; color:#fff;">ภาพถ่ายบุคคล</span>
                        <h3 style="font-size:14px; padding-right:10px; color:#fff; padding-top:5px;">Caption</h3>
                    </div>
                    <div class="col text_right" style="padding-top: 10px; color:#fff;">
                        <span>614 </span><img class="btn_fav" src="assets/image/heart.svg">
                    </div>
                </div>
                <img class="card-img-top" src="assets/image/img_show03.jpg">    
            </div>
            <div class="card-body" style="padding:10px">
                <div class="row">
                    <div class="col-2">
                        <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                            <img src="assets/image/avatar02.jpg" style="height:100%;">    
                        </div>
                    </div>
                    <div class="col-6" style="font-size:10px;">
                        <div class="row">
                            <div class="col-12" style="font-size:14px; font-family: 'Prompt', Regular;">
                                <span>Username</span>
                            </div>
                            <div class="col-12">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-4 text_right">
                        <span style="font-size:10px; padding-right:10px;">เริ่มต้นที่</span>
                        <h3  style="font-size:14px; padding-right:10px;">900 ฿</h3>
                    </div>
                </div>
            </div>
    </div>

  </div>
  <div class="tab-pane container" id="menu1">
    <div class="card" style="padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
            <div class="card-body" style="padding:10px; border-top-left-radius: 10px; border-top-right-radius: 10px; background:#F2F2F2;">
                <div class="row">
                    <div class="col-2">
                        <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                            <img src="assets/image/avatar02.jpg" style="height:100%;">    
                        </div>
                    </div>
                    <div class="col-10" style="font-size:10px;">
                        <div class="row">
                            <div class="col-12" style="font-size:14px; font-family: 'Prompt', Regular;">
                                <span>Username</span>
                            </div>
                            <div class="col-12">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div style="width:100%; height:auto; overflow: hidden; padding:10px;">
                <div style="width:160px; height:160px; border-radius:10px; overflow: hidden; position:relative; float:left; margin-right:10px;">
                    <div style="position: absolute; width:100%; padding:10px 0px 10px 10px;">
                        <div style="float:left;">
                            <span style="font-size:10px; border:1px solid #fff; border-radius:20px; padding:3px 8px; color:#fff;">ภาพบุคคล/แฟชั่น</span>
                        </div>
                    </div>
                    <img style="height:100%;" src="assets/image/img_show03.jpg">    
                </div>
                <div style="width:160px; height:160px; border-radius:10px; overflow: hidden; position:relative;">
                    <div style="position: absolute; width:100%; padding:10px 0px 10px 10px;">
                        <div style="float:left;">
                            <span style="font-size:10px; border:1px solid #fff; border-radius:20px; padding:3px 8px; color:#fff;">รับปริญญา</span>
                        </div>
                    </div>
                    <img style="height:100%;" src="assets/image/img_show02.jpg">    
                </div>
            </div>
        </div>
  </div>
  

</div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>