<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Order Success</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="{{url('css/style.css')}}" rel="stylesheet"> 
</head>
<body>

    <section class="text_right" style="height:60px; padding:20px;">    
    </section>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="order_img_profile">
                    <img src="{{url($user->avatar)}}"> 
                </div>
                <h3 class="headder_text text_center fontsize14 pad5">จ้างงาน {{$user->username}}</h3>
            </div>
		</div>
        <div class="row margin_bomtom20">
            <div class="col">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text_center" style="padding-top: 45%">
                <img src="{{url('assets/image/check.svg')}}" height="35"><br><br>
                <span class="headder_text">ส่งคำขอจ้างงานเรียบร้อย</span><br><br>
                <!-- <button class="btn_color btn_color_follow" onclick="window.location.href='/'">ตกลง</button> -->
            </div>
        </div>
    </div>

</body>
</html>