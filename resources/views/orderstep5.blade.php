<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Step 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="{{url('css/style.css')}}" rel="stylesheet"> 

</head>
<body>

    <!-- <section class="text_right" style="height:60px; padding:20px;">    
        <a style="cursor:pointer; color:#aeaeae;" onclick="window.location.href='/'"><i class="fas fa-times-circle"></i></a>
    </section> -->

    <form action="/order/store" method="post">
    {{ csrf_field() }}

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
                    <div class="progress-bar" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card cardbox">
                    <div class="card-body">
                            <div class="row">
                                <div class="col" style="margin-bottom: -0.5rem;">
                                    <span  class="fontsize16">{{$order->category->name_category}}</span><br>
                                    <span class="fontsize14">
                                    ถ่ายภาพ{{$order->formattime->name_format_time}}
                                    </span>
                                </div>

                                <div class="col-4 text_right">
                                    <h3  class="fontsize16">{{$order->price}} ฿</h3>

                                </div>                
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-4">
                                    <span class="all_more_link fontsize14 color_black font-weight-bold">สถานที่</span>
                                </div>
                                <div class="col">
                                    <span class="all_more_link fontsize14 color_black">{{ $order->place['place_name'] }}</span>
                                    <a class="btn badge badge-info color_white" href="{{ $order->place['url'] }}" target="_blank">ดูแผนที่</a>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-4">
                                    <span class="all_more_link fontsize14 color_black font-weight-bold">วันที่</span>
                                </div>
                                <div class="col">
                                    <span class="all_more_link fontsize14 color_black">{{$order->date_work}}</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <span class="all_more_link fontsize14 color_black font-weight-bold">เวลา</span>
                                </div>
                                <div class="col">
                                    <span class="all_more_link fontsize14 color_black">{{$order->start_time.' - '.$order->end_time}}</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                <span class="all_more_link fontsize14 color_black font-weight-bold">
                                    สิ่งที่ได้รับ
                                </span>
                                <p class="all_more_link fontsize12 color_black">
                                    {{$order->detail}}
                                </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col">
                <span class="all_more_link">ส่วนลด</span>
                <input type="text" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
            </div>
            <div class="col text_right" style="padding-top:18px;">
                <span class="headder_text ">-100 ฿</span>
            </div>
        </div> -->

        <input type="hidden" name="id_category" value="{{$order->id_category}}">
        <input type="hidden" name="id_formattime" value="{{$order->id_formattime}}">
        <input type="hidden" name="price" value="{{$order->price}}">
		<input type="hidden" name="detail" value="{{$order->detail}}">
		<input type="hidden" name="place" value="{{ json_encode($order->place) }}">
        <input type="hidden" name="date_work" value="{{$order->date_work}}">
		<input type="hidden" name="start_time" value="{{$order->start_time}}">
		<input type="hidden" name="end_time" value="{{$order->end_time}}">
		<input type="hidden" name="id_photographer" value="{{ $user->id }}">
		
        <nav class="container nav_bottom">
        <div class="row">
            <div class="col">
                <button type="button" class="btn_color" onclick="window.location.href='/{{$username}}/order/step4'" style="background:#fff; border:1px solid #72AFD3; color:#72AFD3; width:100%; margin:0;">กลับ</button>
            </div>
            <div class="col">
                <button type="submit" id="load" class="btn_color btnload" style="background:#72AFD3; width:100%; margin:0;">จ้างงาน</button>
            </div>
        </div>
        </nav>

    </div>
    </form>

    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script>
    $(document).ready(function(){
        
        $('.btnload').on('click', function() {
            document.getElementById("load").innerHTML = "<div class='spinner'><div class='bounce1'></div><div class='bounce2'></div><div class='bounce3'></div></div>";
            // document.getElementById("load").disabled = true;
            console.log('button loading');
        });

    });
    </script>


</body>
</html>