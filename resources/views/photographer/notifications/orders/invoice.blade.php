<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>สร้างใบเสนอราคา</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="{{url('css/style.css')}}" rel="stylesheet"> 
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>

</head>
<body>

    <section class="text_right" style="height:60px; padding:20px;">    
        <a style="cursor:pointer; color:#aeaeae;" onclick="window.location.href='/'"><i class="fas fa-times-circle"></i></a>
    </section>

{!! Form::model($order, ['method' => 'GET','action' => ['OrderController@update',$order->id]]) !!}
    {{ csrf_field() }}

    <div class="container">
        <div class="row">
            <div class="col-12 text_center">
                <h3 class="headder_text">สร้างใบเสนอราคา</h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col" style="font-size:18px; margin-bottom: -0.5rem;">
                        <span  style="font-size:18px;">ภาพ{{$order->category->name_category}}</span><br>
                        <span style="font-size:14px;">
                         ถ่ายภาพ{{$order->formattime->name_format_time}}
                        </span>
                    </div>              
                </div>
                <hr>
                <div class="row">
                    <div class="col" style="color:#000;">
                        <table class="all_more_link" style="width:100%; font-size: 14px; color:#000;">
                        <tr>
                            <th>สถานที่ </th>
                            <td>{{$order->place_name}}</td>
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
                        
                    </div>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <span class="all_more_link fontsize14" style="color:#000; font-weight: bold;">
                                สิ่งที่ได้รับ
                                </span>
                                {!! Form::textarea('detail',null,['class'=>'form-control textarea_edit']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span class="all_more_link fontsize14" style="color:#000; font-weight: bold;">
                                    ราคางาน
                                </span>
                                {!! Form::text('price',null,['disabled','class'=>'form-control','id'=>'input_price']) !!}
                            </div>
                            <div class="col text_right padtop30">
                                <div class="input-group">
                                    <input type="text" id="output_price" class="form-control fontsize18 textinput_none text_right" disabled>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text textinput_none">฿</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span class="all_more_link fontsize14" style="color:#000; font-weight: bold;">
                                    ค่าเดินทาง
                                </span>
                                {!! Form::text('transportation_cost',null,['class'=>'form-control','id'=>'input_transportation_cost', 'name' => 'transportation_cost']) !!}
                            </div>
                            <div class="col text_right padtop30">                                      
                                <div class="input-group">
                                    <input type="text" id="output_transportation_cost" class="form-control fontsize18 textinput_none text_right" disabled>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text textinput_none">฿</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text  textinput_none">ราคารวม</span>
                            </div>
                            <input type="text" class="form-control fontsize18 textinput_none text_right" disabled>
                            <div class="input-group-append">
                                <span class="input-group-text  textinput_none">฿</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <input type="hidden" name="id_category" value="{{$order->id_category}}">
        <input type="hidden" name="id_formattime" value="{{$order->id_formattime}}">
        <input type="hidden" name="place_name" value="{{$order->place_name}}">
        <input type="hidden" name="shipping_cost" value="{{$order->shipping_cost}}">
        <input type="hidden" name="date_work" value="{{$order->date_work}}">
        <input type="hidden" name="time_work" value="{{$order->time_work}}">

        <div class="row">
            <div class="col text_center">
                <p class="fontsize12">
                การกด "ส่งใบเสนอราคา"<br>
                ถือเป็นการยอมรับ
                <button type="button" class="btn textinput_none fontsize12" data-toggle="modal" data-target="#exampleModalLong" style="color:red !important;">
                ข้อตกลงและเงื่อนไข</button> 
                </p>
            </div>
        </div>

        <div class="row">
            <button class="btn_color margin_box10" type="submit">ส่งใบเสนอราคา</button>
        </div>
    </div>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">ข้อตกลงและเงื่อนไข</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <ul class="padleft20 fontsize14">
                <li>
                    หากมีข้อพิพาษระหว่างผู้ว่าจ้างและช่างภาพ, การยกเลิกการจ้างงานทุกกรณี ทีมงานจะพิจารณาคืนเงินจากข้อมูลใบเสนอราคานี้เป็นสำคัญ
                </li>
                <li>
                    การหายตัวไป ติดต่อไม่ได้ หรือไม่รับผิดชอบงานจะทำให้ฉันถูกระงับการใช้งานโดยถาวร
                </li>
                <li>
                    ทีมงานสามารถเข้าถึงและตรวจสอบรายละเอียดของออเดอร์นี้
                </li>
            </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn_layout_next" data-dismiss="modal">รับทราบ</button>
        </div>
        </div>
    </div>
    </div>

<script>
    document.getElementById('input_price').addEventListener("keyup", myPrice);
    var input_price_box = document.getElementById('input_price');
    function myPrice(){
        var input_price_int = parseInt(input_price_box.value);
        document.getElementById('output_price').value = input_price_int;
    }
    document.getElementById('input_transportation_cost').addEventListener("keyup", myFunction);
    var input_transportation_cost_box = document.getElementById('input_transportation_cost');
    function myFunction(){
        var input_transportation_cost_int = parseInt(input_transportation_cost_box.value);
        document.getElementById('output_transportation_cost').value = parseInt(input_transportation_cost_int);
    }
</script>
</body>
</html>