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

    <section class="text_right" style="height:60px; padding:20px;">    
        <a style="cursor:pointer; color:#aeaeae;" onclick="window.location.href='/index'"><i class="fas fa-times-circle"></i></a>
    </section>

    <form action="/order/store" method="post">
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
                    <div class="progress-bar" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class="container_radio" style="padding-left:20px;">
                <div class="row">
                    <div class="col" style="font-size:18px; margin-bottom: -0.5rem;">
                        <span  style="font-size:18px;">ภาพ{{$order->category->name_category}}</span><br>
                        <span style="font-size:14px;">
                         ถ่ายภาพ{{$order->formattime->name_format_time}}
                        </span>
					</div>

                    <div class="col text_right">
                        <h3  style="font-size:18px; padding-right:20px;">{{$order->price}} ฿</h3>

                    </div>                
                </div>
                <hr style="margin-left:-20px;">
                <div class="row">
                    <div class="col" style="color:#000;">
                        <table class="all_more_link" style="width:100%; font-size: 14px; color:#000;">
                        <tr>
                            <th>สถานที่ </th>
							<td>
								{{ $order->place['address'] }}
								<a class="ml-4" href="{{ $order->place['url'] }}" target="_blank">ดูแผนที่</a>
							</td>
						</tr>
                        <tr>
                            <th>วันที่ </th>
							<td>{{$order->date_work}}</td>
							
                            <!-- <td class="text_right" style="padding-right:20px;">x2</td> -->
                        </tr>
                        <tr>
							<th>เวลา </th>
                            <td>{{$order->time_work}}</td>
                            <!-- <td class="text_right" style="padding-right:20px;">{{$order->price}}</td> -->
                        </tr>
					</table>
					<br>
					<span class="all_more_link" style="color:#000; font-size: 14px; font-weight: bold;">
                            สิ่งที่ได้รับ
                        </span>
                        <p class="all_more_link" style="font-size: 12px; color:#000;">
							{{$order->detail}}
						</p>
                    </div>
                </div>
                </label>

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
		<input type="hidden" name="time_work" value="{{$order->time_work}}">
		<input type="hidden" name="id_photographer" value="{{ $user->id }}">
		
        <nav class="container nav_bottom">
        <div class="row">
            <div class="col">
                <button class="btn_color" onclick="window.location.href='/orderstep5'" style="background:#fff; border:1px solid #72AFD3; color:#72AFD3; width:100%; margin:0;">กลับ</button>
            </div>
            <div class="col">
                <button type="submit" class="btn_color" style="background:#72AFD3; width:100%; margin:0;">ต่อไป</button>
            </div>
        </div>
        </nav>

    </div>
    </form>

</body>
</html>