@extends('layouts.mainmenu_admin')
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">
          
          <div aria-label="breadcrumb">
            <ol class="breadcrumb text-xs">
                <li class="breadcrumb-item">
                  <a class="text-info" href="/admin/orders">ออเดอร์</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{$order->id}}</li>
            </ol>
          </div>

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ออเดอร์ #{{$order->id}}</h1>
            <!-- <a href="#" class="text-white d-none d-sm-inline-block btn btn-sm bg_color_gradient shadow-sm">
                <i class="fas fa-edit fa-sm text-white"></i> แก้ไข
            </a> -->
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="card shadow col">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold">รายละเอียด</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <span class="text-xs font-weight-bold text-uppercase mb-1">ผู้ว่าจ้าง</span> 
                            <br>
                            <a class="text-de-line text-info" target="_blank" href="{{ url("/admin/users/general/{$order->id_employer}")}}">{{$order->employer->username}}</a>
                            <br>
                            <span class="text-xs font-weight-bold text-uppercase mb-1">ช่างภาพ</span> 
                            <br>
                            <a class="text-de-line text-info" target="_blank" href="{{ url("/admin/users/photographer/{$order->id_photographer}")}}">{{$order->photographer->username}}</a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <span class="text-xs font-weight-bold text-uppercase mb-1">วันที่จ้างงาน</span> 
                            <br>
                            <span>{{$order->date_work}}</span>
                            <br>
                            <span class="text-xs font-weight-bold text-uppercase mb-1">เวลา</span> 
                            <br>
                            <span>{{ $order->start_time.' - '.$order->end_time }}</span>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">สภานะออเดอร์</div>
                                            <div class="h5 mb-0 font-weight-bold text-info">{{$order->status_order}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                ยอดชำระ
                                                @if($order->status_payment=='ยังไม่ชำระเงิน')
                                                    <span class="badge badge-danger">{{$order->status_payment}}</span>
                                                @else
                                                    <span class="badge badge-success">{{$order->status_payment}}</span>
                                                @endif
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold">
                                                {{number_format($order->price)}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-xs font-weight-bold text-uppercase mb-1">รายการ</p> 
                        </div>
                        <div class="col">
                            <p class="text-xs font-weight-bold text-uppercase mb-1">ราคา</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col col-md-8">
                            ถ่ายภาพ{{ $order->category->name_category.'('.$order->formattime->name_format_time.')' }}
                            <br>
                            <p class="text-xs">
                                {{ $order->detail }}
                            </p>                         
                        </div>
                        <div class="col">
                            <p>{{ number_format($order->price) }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-8">
                            ค่าเดินทาง
                        </div>
                        <div class="col">
                            <p>{{ number_format($order->transportation_cost) }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-8">
                            ค่าจัดส่ง
                        </div>
                        <div class="col">
                            <p>{{ number_format($order->shipping_cost) }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col col-md-8 text_right">
                            รวมยอด
                        </div>
                        <div class="col">
                            <p>{{ number_format($order->total) }}</p>
                        </div>
                    </div>
                </div>
            </div>

          </div>

      </div>
      <!-- /.container-fluid -->
@stop