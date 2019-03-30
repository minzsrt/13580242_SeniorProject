<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Step 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="{{url('css/style.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{url('css/pignose.calendar.css')}}" />


</head>
<body>

    <!-- <section class="text_right" style="height:60px; padding:20px;">    
        <a style="cursor:pointer; color:#aeaeae;" onclick="window.location.href='/'"><i class="fas fa-times-circle"></i></a>
    </section> -->

    <form action="/{{$username}}/order/step3" method="post">
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
                    <div class="progress-bar" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <span class="all_more_link">วันที่</span>

        <div class="row">
            <div class="col">
                    <div class="inner-addon right-addon">
                        <i class="fas fa-calendar-alt right-icon"></i>
                        <input type="text" id="text-calendar" class="calendar input_box" name="date_work"/>
                    </div>
            </div>
        </div>

        <span class="all_more_link">เวลา</span>
        <div class="row">
                        <div class="col input-group">
                            <select id="start_time" name="timeselect_start" class="select_search" style="text-align-last:center;">
                                <option value="6:00">6:00 AM</option>
                                <option value="7:00">7:00 AM</option>
                                <option value="8:00">8:00 AM</option>
                                <option value="9:00">9:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="13:00">1:00 PM</option>
                                <option value="14:00">2:00 PM</option>
                                <option value="15:00">3:00 PM</option>
                                <option value="16:00">4:00 PM</option>
                                <option value="17:00">5:00 PM</option>
                                <option value="18:00">6:00 PM</option>
                                <option value="19:00">7:00 PM</option>
                                <option value="20:00">8:00 PM</option>
                                <option value="21:00">9:00 PM</option>
                                <option value="22:00">10:00 PM</option>
                            </select>   
                            <input name="start_time" type="hidden" id="get_id_val_start" value="">
                        </div>
                        <span>-</span>
                        <div class="col input-group">
                            <select name="timeselect_end" id="end_time" @if($order->id_formattime != 3) disabled @endif class="nonebg select_search" style="text-align-last:center;">
                                <option value="6:00">6:00 AM</option>
                                <option value="7:00">7:00 AM</option>
                                <option value="8:00">8:00 AM</option>
                                <option value="9:00">9:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="13:00">1:00 PM</option>
                                <option value="14:00">2:00 PM</option>
                                <option value="15:00">3:00 PM</option>
                                <option value="16:00">4:00 PM</option>
                                <option value="17:00">5:00 PM</option>
                                <option value="18:00">6:00 PM</option>
                                <option value="19:00">7:00 PM</option>
                                <option value="20:00">8:00 PM</option>
                                <option value="21:00">9:00 PM</option>
                                <option value="22:00">10:00 PM</option>
                            </select>
                            <input name="end_time" id="get_id_val_end" type="hidden" value="">
                        </div>
        </div>

        <nav class="container nav_bottom nav_bottom_profile" style="box-shadow: none;">
            <div class="row">
                <div class="col" style="display: inherit; padding-top:10px;">
                    <button type="button" class="btn_color" onclick="window.location.href='/{{$username}}/order/step2'" style="background:#fff; border:1px solid #72AFD3; color:#72AFD3; width:100%; margin:0;">กลับ</button>
                </div>
                <div class="col" style="display: inherit; padding-top:10px;">
                    <button type="submit" class="btn_color" style="background:#72AFD3; width:100%; margin:0;">ต่อไป</button>
                </div>
            </div>
        </nav>

    </div>
    </form>

    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/pignose.calendar.min.js') }}"></script>
    <script>
    jQuery(function($) {

        $('input.calendar').pignoseCalendar({
            format: 'YYYY-MM-DD', // date format string. (2017-02-02)
            disabledDates:[
                @foreach ($disableddate as $disdate)
                
                '{{$disdate->date_work}}',
                
                @endforeach
            ],
        });

    });
        var selectElem = document.getElementById('start_time')
        var $idvalstart = $('#get_id_val_start');
        var $idvalend = $('#get_id_val_end');

        // When a new <option> is selected
        selectElem.addEventListener('change', function() {
            var index = selectElem.selectedIndex;
            
            @if($order->id_formattime == 1)
            var index2 = index+4;
            @elseif($order->id_formattime == 2)
            var index2 = index+8;
            @endif

            document.getElementById("end_time").selectedIndex = index2;

            $('select[name="timeselect_start"]').change(function(){
                $idvalstart.val($(this).val())
            }).triggerHandler('change')
            $('select[name="timeselect_end"]').change(function(){
                $idvalend.val($(this).val())
            }).triggerHandler('change')

        })



    </script>
</body>
</html>