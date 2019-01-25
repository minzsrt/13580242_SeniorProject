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

        <div class="row">
            <div class="col">
                <label class="container_radio container_radio_fix">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    กรุงเทพและปริมลฑล
                    </div>
                </div>
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
                </label>

                <label class="container_radio container_radio_fix">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    ภาคเหนือ
                    </div>
                </div>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
                </label>

                <label class="container_radio container_radio_fix">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    ภาคกลาง
                    </div>
                </div>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
                </label>

                <label class="container_radio container_radio_fix">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    ภาคตะวันออก
                    </div>
                </div>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
                </label>

                <label class="container_radio container_radio_fix">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    ภาคตะวันออกเฉียงเหนือ
                    </div>
                </div>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
                </label>

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