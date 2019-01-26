<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Package</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>
<body>

    <section style="height:60px; padding:20px;">    
        <button class="btn_layout_back" onclick="window.location.href='/profile_photographer'">กลับ</button> 
    </section>
 
    <div class="container wrap_container_head">
        <div class="row">
            <div class="col">
                <h3 class="headder_text">ค่าบริการถ่ายภาพรับปริญญา</h3>
            </div>
        </div>
    </div> 

    <div class="container">
        @foreach($package_cards as $package_card)
            @if( Auth::user()->id === $package_card->id_user )
            <a class="a_getlink"	href="{{ url("photographer/packages/show/{$package_card->id}/edit/") }}">
                <div class="card-body album_show_wrap padding_card">
                    <div class="row">
                        <div class="col-8" style="font-size:10px;">
                            <h3  style="font-size:18px; padding-right:10px; display: inline;" >
                            ถ่ายภาพ{{ $package_card->formattime->name_format_time }}
                            </h3>
                        </div>
                        <div class="col-4 text_right">
                            <h3  style="font-size:18px; padding-right:10px;">{{ $package_card->price }} ฿</h3>
                        </div>
                    </div>
                    <div class="row">
                        <p class="col detail_pack">
                        <span>สิ่งที่ได้รับ</span><br>
                        {{ $package_card->detail }}
                        </p>
                    </div>
                </div>
            </a>
            @endif
        @endforeach
            <div class="card btn_create">
                <button class="btn" onclick="window.location.href='/createPackageCard'">
                    <i class="fas fa-plus-circle"></i>
                </button> 
            </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        
        $('.center').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '100px',
                slidesToShow: 1
            }
            }
        ]
        });
    });
  </script>
</body>
</html>