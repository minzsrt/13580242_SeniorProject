<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Step 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="{{url('css/style.css')}}" rel="stylesheet"> 

</head>
<body>

    <section class="text_right" style="height:60px; padding:20px;">    
        <a style="cursor:pointer; color:#aeaeae;" onclick="window.location.href='/'"><i class="fas fa-times-circle"></i></a>
    </section>

    <form action="/{{$username}}/order/step1" method="post">
    {{ csrf_field() }}

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="order_img_profile">
                    <img src="{{url($user->avatar)}}"> 
                </div>
                <h3 class="headder_text text_center review_username">จ้างงาน {{$user->username}}</h3>
            </div>
        </div>
        <div class="row margin_bomtom20">
            <div class="col">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <span class="all_more_link">ประเภทงาน</span>

        <div class="row">
            <div class="container form-group">
                        <div id="radioBtn" class="row">
                        @foreach($package_cards as $package_card)
                            <a class="col-md" data-toggle="id_category" data-title="{{$package_card->id_category}}">
                                <label class="container_radio">
                                    <div class="row height60">
                                        <div class="col padtop20">
                                            <h3 class="fontsize14">{{ $package_card->category->name_category }}</h3>
                                        </div>
                                    </div>
                                    <input type="radio" name="radio" {{ $loop->first ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                            </a>
                            @endforeach
                        </div>
    				    <input type="text" name="id_category" id="id_category">
            </div>
        </div>
        <nav class="container nav_bottom">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <button type="submit" class="btn_color" style="background:#72AFD3; width:100%; margin:0;">ต่อไป</button>
            </div>
        </div>
        </nav>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
    jQuery(function($) {


        $('#radioBtn a').on('click', function(){
            var sel = $(this).data('title');
            var tog = $(this).data('toggle');
            $('#'+tog).prop('value', sel);
            
            $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]');
            $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]');
        });
    });
    </script>

</body>
</html>