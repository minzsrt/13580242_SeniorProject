@extends('layouts.mainmenu_admin')
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ออเดอร์</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">สถานะ</th>
                    <th scope="col">การชำระเงิน</th>
                    <th scope="col">ยอดชำระ</th>
                    <th scope="col">ช่างภาพ</th>
                    <th scope="col">ผู้จ้าง</th>
                    <th scope="col">Active</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orders as $order)
                  <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>รอชำระเงิน</td>
                    <td>
                      @if($order->status_payment=='ยังไม่ชำระเงิน')
                        <span class="badge badge-danger">{{$order->status_payment}}</span>
                      @else
                        <span class="badge badge-success">{{$order->status_payment}}</span>
                      @endif
                    </td>
                    <td>{{ number_format($order->price) }}</td>
                    <td>{{$order->id_employer}}</td>
                    <td>{{$order->id_photographer}}</td>
                    <td>
                      <a class="btn badge badge-info" href="{{ url("admin/orders/{$order->id}")}}">Show More</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="col-lg-12 mb-4">
              {{ $orders->links() }}
            </div>

          </div>

      </div>
      <!-- /.container-fluid -->
@stop