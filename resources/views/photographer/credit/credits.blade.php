@extends('layouts.main')
@section('page_title', 'Deposit Account')
@section('link_back', '/')
@section('content')
    <div class="container">
            @if (session('alertpost'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('alertpost') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif

            @if (session('alertedit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('alertedit') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif   
            
    <div class="row">
    <div class="col">
        <label class="container_radio" style="height:auto; background:#37ECBA; padding: 40px 0px;">
                <div class="row">
                    <div class="col-12 text-center">
                    <span style=" padding: 3px 10px; border:1px solid #000; border-radius: 20px;">เตรียมการโอนเงิน</span> 
                    </div>
                    <div class="col-12 text-center">
                        <h3  style="font-size:28px; padding: 20px;">{{$deposit->total}} ฿</h3>
                    </div>
                    <div class="col-12 text-center">
                        รอบการโอนถัดไปคือวันที่ 15 มกราคม 2562
                    </div>
                </div>
        </label>
    </div>
    </div>

    <div class="row">
    <div class="col-6">
                @if(empty($deposit)) 
                <label class="container_radio btn_create" style="padding: 10px; height:80px;">
                        <div class="row">
                            <div class="col-12">
                            <span class="all_more_link">บัญชีธนาคารของฉัน</span> 
                            </div>
                            <button class="btn btn_width" onclick="window.location.href='{{url('credits/'.Auth::user()->username.'/create')}}'">
                                <i class="fas fa-plus-circle"></i>
                            </button> 
                        </div>
                </label>

                @else
                <label class="container_radio" style="padding: 10px;">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-8">
                                    <span class="all_more_link">บัญชีธนาคาร</span> 
                                    </div>
                                    <div class="col text_right">
                                        <div class="dropdown no-arrow dropright">
                                            <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ url('credits/'.Auth::user()->username.'/edit') }}">
                                                    แก้ไข
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <span>{{$deposit->deposit_account_number}}</span>
                            </div>
                            <div class="col-12 all_more_link">
                            {{$deposit->bank->name_bank}}
                            </div>
                        </div>
                </label>
        @endif


    </div>
    </div>


     <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
     <script type="text/javascript" src="https://unpkg.com/popper.js"></script>
     

    <!-- <div class="row">
            <div class="col">
                <h3 class="headder_text">ประวัติการทำรายการ</h3>
            </div>
    </div>
    <div class="row">
        <div class="col">
        <table style="width:100%;">
        <thead>
        <tr class="text-center" style="color:#fff; background:#72AFD3;">
            <th>โอนเงินเมื่อ</th>
            <th>จำนวนเงิน</th>
            <th>สถานะ</th>
            <th>เอกสาร</th>
        </tr>
        </thead>
        <tbody class="text-center">
        <tr>
            <td>31/10/2018</td>
            <td>3,000</td>
            <td>โอนแล้ว</td>
            <td><i class="far fa-file"></i></td>
        </tr>
        </tbody>
        </table>
        </div>
    </div> -->
    <div>
@stop
