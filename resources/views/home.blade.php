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
<!-- <body class="animsition"> -->
<body>

<div class="container wrap_all onmobile">

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


<div class="container ondesktop margin_box20">

    <div class="row margin_auto"  style="height:90vh;  border-radius: 10px; overflow: hidden; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
        <div class="col wrap_all" style="position:relative;">
            <div class="row text_right center_absolute">
                <div class="col-12">
                    <h1 class="headder_text color_white">ค้นหาช่างภาพได้ง่ายๆกับเรา</h1>
                </div>
                <div class="col-12">
                    <h3 class="all_more_link color_white">ช่างภาพฝีมือดีรอคุณอยู่</h3>
                </div>
            </div>
        </div>
        <div class="col">

                <div class="row margin_box20">
                        <img class="logo margin_auto" src="assets/image/logo.png">    
                </div>

                <div class="row">
                    <div class="col-8 margin_auto">
                        <ul class="nav nav-tabs nav-justified btn_width" role="tablist">
                            <div class="slider"></div>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="true">
                                เข้าสู่ระบบ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu2" role="tab" aria-controls="menu2" aria-selected="false">
                                สร้างบัญชีของคุณ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">

                    <div class="tab-content btn_width">

                        <div class="tab-pane fade margin_top20 show active" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="email" type="email" class="input_box 
                                                        form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="อีเมล" required autofocus>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="password" type="password" class="input_box form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="รหัสผ่าน" required>

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4 text_right">
                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link all_more_link animsition-link" href="{{ route('password.request') }}">
                                                                {{ __('ลืมรหัสผ่านใช่ไหม?') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row margin_box20">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn_color btn_color_employ btn_width">
                                                            {{ __('Login') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade container" id="menu2" role="tabpanel" aria-labelledby="menu2-tab">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    
                                        <p style="color:#000;" class="invalid-feedback"  role="alert">
                                            error
                                        </p>

                                        <div class="card-body">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="email" type="email" class="input_box form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="อีเมล" required>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="username" type="text" class="input_box form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="ชื่อผู้ใช้" required autofocus>

                                                        @if ($errors->has('username'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('username') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="password" type="password" class="input_box 
                                                        form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="รหัสผ่าน" required>

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="password-confirm" type="password" class="input_box form-control" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row margin_box20">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn_color btn_color_employ btn_width">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- <input type="hinden" name="avatar" value="profile/profile-default.svg"> -->
                                                <input type="hidden" name="avatar" value="https://avatars.dicebear.com/v2/identicon/Bee2019.svg">
                                                
                                            <!-- <a href="{{url('https://avatars.dicebear.com/v2/identicon/Bee2019.svg')}}" target="_blank">12345</a> -->
                                                <!-- <div class="form-group row mb-0 bottom_fixed">
                                                        <div class="col-md-8 offset-md-4 text_center">
                                                            <h3 class="headder_text">
                                                                หรือ สร้างบัญชีด้วย
                                                            </h3>
                                                        </div> 
                                                        <div class="col-md-8 offset-md-4">
                                                            <button class="btn_color_facebook btn_color_employ btn_width margin_box20">
                                                                {{ __('Facebook') }}
                                                            </button>
                                                        </div>
                                                </div> -->
                                                
                                            </form>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
        </div>
    </div>
    
</div>



<!-- animsition.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
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

  $(".nav-tabs a").click(function() {
            var position = $(this).parent().position();
            console.log(position);
            var width = $(this).parent().width();
            console.log(width);
            $(".slider").css({"left":+ position.left,"width":width});
        });
        var actWidth = $(".nav-tabs").find(".active").parent("li").width();
            console.log(actWidth);
        var actPosition = $(".nav-tabs .active").position();
        $(".slider").css({"left":+ actPosition.left,"width": actWidth});

});
</script>
    
</body>
</html>