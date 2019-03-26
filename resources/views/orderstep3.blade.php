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
                        <i class="fas fa-calendar-alt"></i>
                        <input type="text" id="text-calendar" class="calendar input_box" name="date_work"/>
                    </div>
            </div>
        </div>

        <span class="all_more_link">เวลา</span>
        <div class="row">
                        <div class="col input-group">
                            <input name="start_time" type="time" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                        </div>
                        <span>-</span>
                        <div class="col input-group">
                            <input name="end_time" type="time" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                        </div>
        </div>
        

        <!-- <div class="row" style="margin-top:20px;">
            <div class="col">
            <div class="date_r">
            <div class="row text_center">
                <div class="col">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
                <div class="col ">
                JUNE 2017
                </div>
                <div class="col">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>
            
            <table class="datepicker text_center">
                    <tbody>
                        <tr>
                            <th>S</th>
                            <th>M</th>
                            <th>T</th>
                            <th>W</th>
                            <th>T</th>
                            <th>F</th>
                            <th>S</th>
                        </tr>
                        <tr>
                            <td style="opacity: 0.5;">28</td>
                            <td style="opacity: 0.5;">29</td>
                            <td style="opacity: 0.5;">30</td>
                            <td style="opacity: 0.5;">31</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>12</td>
                            <td class="activedate">13</td>
                            <td>14</td>
                            <td class="active_employ_date">15</td>
                            <td>16</td>
                            <td class="active_employ_date">17</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>19</td>
                            <td class="active_employ_date">20</td>
                            <td>21</td>
                            <td>22</td>
                            <td class="active_employ_date">23</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td style="opacity: 0.5;">1</td>
                        </tr>
                    </tbody>
            </table>
            </div>
        </div> -->

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
		format: 'YYYY-MM-DD' // date format string. (2017-02-02)
        });
        
    });

    </script>
</body>
</html>