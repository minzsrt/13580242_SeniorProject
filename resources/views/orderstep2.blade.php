<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Step 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="{{url('css/style.css')}}" rel="stylesheet"> 

</head>
<body>

    <section class="text_right" style="height:60px; padding:20px;">    
        <a style="cursor:pointer; color:#aeaeae;" onclick="window.location.href='/index'"><i class="fas fa-times-circle"></i></a>
    </section>

    <form action="/{{$username}}/order/step2" method="post">
    {{ csrf_field() }}

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="order_img_profile">
                    <img src="{{url($user->avatar)}}"> 
                </div>
                <h3 class="headder_text text_center" style="padding: 5px; font-size:14px;">จ้างงาน {{$username}}</h3>
            </div>
        </div>
        <div class="row margin_bomtom20">
            <div class="col">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <span class="all_more_link">รูปแบบงาน</span>

        <div class="row">
            <div class="container form-group">
                        <div id="radioBtn" class="row">
                            @foreach($package_cards as $package_card)
                                <a class="col-md" 
                                data-toggle="id_formattime"
                                data-toggle2="price"
                                data-toggle3="detail"
                                data-title="{{$package_card->id_formattime}}"
                                data-price="{{ $package_card->price }}"
                                data-detail="{{ $package_card->detail }}"
                                >
                                    <label class="container_radio">
                                    <div class="row">
                                        <div class="col" style="font-size: 18px;">
                                            <h3  style="font-size:18px;">ถ่ายภาพ{{ $package_card->formattime->name_format_time }}</h3>
                                        </div>
                                        <div class="col text_right">
                                            <h3  style="font-size:18px; padding-right:20px;">{{ $package_card->price }}</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="font-size: 18px;">
                                            <span class="all_more_link">
                                                สิ่งที่ได้รับ
                                            </span>
                                            <p class="all_more_link">
                                            {{ $package_card->detail }}
                                            </p>
                                        </div>
                                    </div>
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                    </label>
                                </a>
                            @endforeach
                        </div>
    				    <input type="text" name="id_formattime" id="id_formattime">
    				    <input type="text" name="price" id="price">
    				    <input type="text" name="detail" id="detail">
            </div>
        </div>
        <nav class="container nav_bottom nav_bottom">
        <div class="row">
            <div class="col">
                <button type="submit" class="btn_color" onclick="window.location.href='/orderstep1'" style="background:#fff; border:1px solid #72AFD3; color:#72AFD3; width:100%; margin:0;">กลับ</button>
            </div>
            <div class="col">
                <button type="submit" class="btn_color" onclick="window.location.href='/orderstep3'" style="background:#72AFD3; width:100%; margin:0;">ต่อไป</button>
            </div>
        </div>
        </nav>

    </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
    jQuery(function($) {


        $('#radioBtn a').on('click', function(){
            var sel = $(this).data('title');
            var sel2 = $(this).data('price');
            var sel3 = $(this).data('detail');
            var tog = $(this).data('toggle');
            var tog2 = $(this).data('toggle2');
            var tog3 = $(this).data('toggle3');
            $('#'+tog).prop('value', sel);
            $('#'+tog2).prop('value', sel2);
            $('#'+tog3).prop('value', sel3);
            
            $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]');
            $('a[data-toggle="'+tog2+'"]').not('[data-title="'+sel2+'"]');
            $('a[data-toggle="'+tog3+'"]').not('[data-title="'+sel3+'"]');
            $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]');
            $('a[data-toggle="'+tog2+'"][data-title="'+sel2+'"]');
            $('a[data-toggle="'+tog3+'"][data-title="'+sel3+'"]');
        });
    });
    </script>


</body>
</html>