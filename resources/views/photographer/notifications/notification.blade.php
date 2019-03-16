@extends('layouts.mainmenu_noti')
@section('page_title', 'Notification')
@section('content')
<div class="container">
    @foreach($orders as $order)
        <div class="row margin_box10">
            <div class="col-12 noti_card noti_active">
                <div class="row">
                    <div class="col-12" >
                        <span class="fontsize10">วันนี้</span><br>
                        @foreach($employer as $employ)
                            <span class="fontsize14">{{$employ->username}} ชำระเงินเรียบร้อย</span>
                        @endforeach
                    </div>
                    <div class="col-12 text_center">
                        <button class="btn_color" onclick="window.location.href='/management'"}}'">จัดการออร์เดอร์</button>
                    </div>
            </div>
            </div>
        </div>
    @endforeach

        @foreach($orders as $order)
        <div class="row margin_box10">
            <div class="col-12 noti_card noti_active">
                <div class="row">
                    <div class="col-12" >
                        <span class="fontsize10">วันนี้</span><br>
                        @foreach($employer as $employ)
                            <span class="fontsize14">{{$employ->username}} ต้องการจ้างงานคุณ</span>
                        @endforeach
                    </div>
                    <div class="col-12 text_center">
                        <button class="btn_color" data-toggle="modal" data-target="#modalorder{{$order->id}}">ดูรายละเอียด</button>
                    </div>
            </div>
            </div>
            <div class="modal fade" id="modalorder{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียด</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col fontsize18">
                            <span class="fontsize18">ภาพ{{$order->category->name_category}}</span><br>
                            <span style="font-size:14px;">
                            ถ่ายภาพ{{$order->formattime->name_format_time}}
                            </span>
                        </div>
                        <div class="col text_right">
                            <h3  style="font-size:18px; padding-right:20px;">{{$order->total}} ฿</h3>
                        </div>                
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col" style="color:#000;">
                            <table class="all_more_link" style="width:100%; font-size: 14px; color:#000;">
                            <tr>
                                <th>สถานที่ </th>
                                <td>{{$order->place}}</td>
                            </tr>
                            <tr>
                                <th>วันที่ </th>
                                <td>{{$order->date_work}}</td>
                            </tr>
                            <tr>
                                <th>เวลา </th>
                                <td>{{$order->time_work}}</td>
                                <!-- <td class="text_right" style="padding-right:20px;">{{$order->price}}x{{$order->time_work}}</td> -->
                            </tr>
                            </table>
                            <span class="all_more_link fontsize14" style="color:#000; font-weight: bold;">
                                สิ่งที่ลูกค้าได้รับ
                            </span>
                            <p class="all_more_link fontsize14" style="color:#000;">
                                {{$order->detail}}
                            </p>
                        </div>
                    </div>
                </div>
                @if($order->status_order == 'รอการตอบรับ')
                <div class="modal-footer">
                    <button type="button" class="btn btn_layout_back" data-dismiss="modal">ยกเลิก</button>
                    <button class="btn_layout_next" onclick="window.location.href='/order/{{$order->id}}/invoice'"}}'">
                        ส่งใบเสนอราคา
                    </button>
                </div>
                @endif
                </div>
            </div>
            </div>
        </div>
        @endforeach
</div> 
@endsection

@push('scripts')
	<script>
		clearNoti()
	</script>
@endpush
