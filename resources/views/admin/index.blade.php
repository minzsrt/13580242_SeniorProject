@extends('layouts.mainmenu_admin')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">แดชบอร์ด</h1>
        </div>
        <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">รายรับ</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">40,000 ฿</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-plus fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">ยอดชำระช่างภาพ</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">38,000 ฿</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-minus fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">กำไร</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">2,000 ฿</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-money-bill fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>

        <div class="row">
        <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold">ผู้ใช้งานทั้งหมด</h6>
                  <span>{{$allusercount}}</span>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle color_37ECBA"></i> ช่างภาพ {{$ptusercount}}
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle color_72AFD3"></i> ผู้ใช้งานทั่วไป {{$gnusercount}}
                    </span>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@stop
@section('js')
<script>
            // myPieChart
            var ctx = document.getElementById("myPieChart");
            var myPieChart = new Chart(ctx, {
              type: 'doughnut',
              data: {
                labels: ["ผู้ใช้งานทั่วไป", "ช่างภาพ"],
                datasets: [{
                  data: [{{$gnusercount}}, {{$ptusercount}}],
                  backgroundColor: ['#72AFD3', '#37ECBA'],
                  hoverBackgroundColor: ['#72AFD3', '#37ECBA'],
                  hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
              },
              options: {
                maintainAspectRatio: false,
                tooltips: {
                  backgroundColor: "rgb(255,255,255)",
                  bodyFontColor: "#858796",
                  borderColor: '#dddfeb',
                  borderWidth: 1,
                  xPadding: 15,
                  yPadding: 15,
                  displayColors: false,
                  caretPadding: 10,
                },
                legend: {
                  display: false
                },
                cutoutPercentage: 80,
              },
            });
  </script>
@stop
