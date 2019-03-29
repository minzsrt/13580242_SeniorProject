

@extends('layouts.mainprofile')
@section('page_title', 'Show')
@section('link_back', '/notification/'.Auth::user()->username)
@section('content')

{!! Form::model($order, ['method' => 'GET','action' => ['OrderController@update',$order->id]]) !!}
    {{ csrf_field() }}

    <div class="container">

        <p class="headder_text" style="position: relative; padding: 5px;">
        สร้างใบเสนอราคาออเดอร์ #{{$order->id}}<br>
        <span class="btn badge color_white fontsize12 category_badge">
        {{$order->category->name_category}}
        </span><br>
        </p>

        <div class="row">
            <div class="col">
                <div class="card cardbox">
                    <div class="card-body">
                                <div class="row">
                                    <div class="col" style="margin-bottom: -0.5rem;">
                                        <span  class="fontsize16 font-weight-bold">{{$order->category->name_category}}</span><br>
                                        <span class="fontsize14">
                                        ถ่ายภาพ{{$order->formattime->name_format_time}}
                                        </span>
                                    </div>

                                    <div class="col-4 text_right">
                                        <h3  class="fontsize18 badge category_badge color_white" id="displaybadge">{{number_format($order->total)}}
                                        ฿
                                        </h3>
                                    </div>                
                                </div>

                                <hr class="color_white">

                                <div class="row">
                                    <div class="col">
                                        <span class="all_more_link color_black font-weight-bold">ผู้ว่าจ้าง</span> 
                                        <br>
                                        <span class="fontsize14">{{ $order->employer->username }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span class="all_more_link color_black font-weight-bold">วันที่</span> 
                                        <br>
                                        <span class="fontsize14">{{ date("j M Y", strtotime($order->date_work) )}}</span>
                                    </div>
                                    <div class="col">
                                        <span class="all_more_link color_black font-weight-bold">เวลา</span> 
                                        <br>
                                        <span class="fontsize14">{{$order->start_time.' - '.$order->end_time}}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span class="all_more_link color_black font-weight-bold">สถานที่</span> 
                                        <br>
                                        <span class="fontsize14 ">{{ $order->place_name }}</span>
                                        <a class="btn badge badge-info color_white" href="{{ $order->url }}" target="_blank"><i class="fas fa-map-marker-alt"></i> ดูแผนที่</a>
                                       
                                    </div>
                                </div>

                                <hr class="color_white">

                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-8">
                                                <span class="all_more_link color_black font-weight-bold">รายการ</span> 
                                            </div>
                                            <div class="col">
                                                <span class="all_more_link color_black font-weight-bold">ราคา</span> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <span class="fontsize14">{{ 'งานถ่าย'.$order->category->name_category.$order->formattime->name_format_time}}</span> 
                                            </div>
                                            <div class="col">
                                                <span class="fontsize14">
                                                    {{number_format($order->price)}}
                                                </span> 
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-8">
                                                <span class="fontsize14">ค่าเดินทาง</span> 
                                            </div>
                                            <div class="col">
                                                    {!! Form::number('transportation_cost',null,['class'=>'form-control','id'=>'input_transportation_cost', 'name' => 'transportation_cost','class'=>'input_box fontsize12']) !!}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-8 text_right">
                                                <span class="fontsize14 font-weight-bold">รวมยอด</span> 
                                            </div>
                                            <div class="col-4">
                                                <span class="fontsize14" id="displaytotal">
                                                    {{number_format($order->total)}}
                                                </span> 
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr class="color_white">

                                <div class="row">
                                    <div class="col">
                                        <span class="all_more_link color_black font-weight-bold">
                                            สิ่งที่ลูกค้าได้รับ
                                        </span>
                                        <p class="all_more_link fontsize14 color_black">
                                            {{$order->detail}}
                                        </p>
                                    </div>
                                </div>


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
                                    <div class="col text_center">
                                        <div class="row">
                                            <div class="col">
                                                    <button class="margin_auto btn btn_color bg_72AFD3" type="submit" >
                                                    ส่งใบเสนอราคา
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

        <input type="text" name="id_category" value="{{$order->id_category}}">
        <input type="text" name="id_formattime" value="{{$order->id_formattime}}">
        <input type="text" name="place_name" value="{{$order->place_name}}">
        <input type="text" name="shipping_cost" value="{{$order->shipping_cost}}">
        <input type="text" name="price" value="{{$order->price}}" id="price_cost">
        <input type="text" name="date_work" value="{{$order->date_work}}">
        <input type="text" name="start_time" value="{{$order->start_time}}">
        <input type="text" name="end_time" value="{{$order->end_time}}">

<!-- modal -->
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

</form>

<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/responsive_waterfall.js') }}"></script>
<script>

    $('.btnload').on('click', function() {
            document.getElementById("load").innerHTML = "<div class='spinner'><div class='bounce1'></div><div class='bounce2'></div><div class='bounce3'></div></div>";
            // document.getElementById("load").disabled = true;
            console.log('button loading');
    });

    document.getElementById('input_transportation_cost').addEventListener("keyup", myFunction);
        var input_transportation_cost_box = document.getElementById('input_transportation_cost');
        var price_cost_box = document.getElementById('price_cost');
    function myFunction(){

        var input_transportation_cost_int = parseInt(input_transportation_cost_box.value);
        var price_cost_int = parseInt(price_cost_box.value);

        document.getElementById('sum_total').value = parseInt(input_transportation_cost_int+price_cost_int);

        document.getElementById('total').value = parseInt(input_transportation_cost_int+price_cost_int);
    }

    $('#input_transportation_cost').keyup(function () {
        
        var input_transportation_cost_box = document.getElementById('input_transportation_cost');
        var price_cost_box = document.getElementById('price_cost');

        var input_transportation_cost_int = parseInt(input_transportation_cost_box.value);
        var price_cost_int = parseInt(price_cost_box.value);

        $('#displaybadge').text(input_transportation_cost_int+price_cost_int+' ฿');
        $('#displaytotal').text(input_transportation_cost_int+price_cost_int);
    });

</script>
@stop