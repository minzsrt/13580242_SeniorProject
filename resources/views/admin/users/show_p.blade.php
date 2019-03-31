@extends('layouts.mainmenu_admin')
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">
          
          <div aria-label="breadcrumb">
            <ol class="breadcrumb text-xs">
                <li class="breadcrumb-item">
                  <a class="text-info" href="/admin/users/photographer">ช่างภาพ</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{$user->id}}</li>
            </ol>
          </div>

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{$user->username}}</h1>
            <div>
            <!-- <a href="#" class="text-white d-none d-sm-inline-block btn btn-sm bg_color_gradient">
                <i class="fas fa-edit fa-sm text-white"></i> แก้ไข
            </a>
            <a class="text-white d-none d-sm-inline-block btn btn-sm btn-danger" href="{{ url("/admin/users/photographer/{$user->id}")}}">
            <i class="far fa-trash-alt"></i> ลบผู้ใช้
            </a> -->
            </div>
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
                            <span class="text-xs font-weight-bold text-info mb-1">ID</span> 
                            <br>
                            <span>{{$user->id}}</span>
                            <br>
                            <span class="text-xs font-weight-bold text-info mb-1">ยืนยันตัวตน</span> 
                            <br>
                            <span>{{$verify->statusverify->status_verify}}</span>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <span class="text-xs font-weight-bold text-info mb-1">Username</span> 
                            <br>
                            <span>{{$user->username}}</span>
                            <br>
                            <span class="text-xs font-weight-bold text-info mb-1">Email</span> 
                            <br>
                            <span>{{$user->email}}</span>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">ประวัติการจ้างงาน</div>
                                            <div class="h5 mb-0 font-weight-bold text-info">{{$order}} ครั้ง</div>
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
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">ยอดเงินสะสม</div>
                                            <div class="h5 mb-0 font-weight-bold text-info">{{$order}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col">
                            <span class="text-xs font-weight-bold text-info mb-1">ชื่อ-นามสกุล</span> 
                            <br>
                            <span>{{$dataptg->name}}</span>
                        </div>
                        <div class="col">
                            <span class="text-xs font-weight-bold text-info mb-1">เลขที่บัตรประชาชน</span> 
                            <br>
                            <span>{{$dataptg->idcard}}</span>
                        </div>
                        <div class="col">
                            <span class="text-xs font-weight-bold text-info mb-1">วันเกิด</span> 
                            <br>
                            <span>{{ date("M jS, Y", strtotime($dataptg->birthday)) }}</span>
                        </div>
                        <div class="col">
                            <span class="text-xs font-weight-bold text-info mb-1">เพศ</span> 
                            <br>
                            <span>{{$dataptg->sex}}</span>
                        </div>
                    </div>
                    <hr>
                    <span class="text-xs font-weight-bold text-info mb-1">ที่อยู่</span> 
                    <div class="row">
                                <div class="col">
                                    <span class="text-xs font-weight-bold mb-1">เลขที่/อาคาร</span> 
                                    <br>
                                    <span>{{$dataptg->address}}</span>
                                </div>
                    </div>
                    <div class="row">
                                <div class="col">
                                    <span class="text-xs font-weight-bold mb-1">ตำบล/แขวง</span> 
                                    <br>
                                    <span>{{$dataptg->sub_district}}</span>
                                </div>
                                <div class="col">
                                    <span class="text-xs font-weight-bold mb-1">อำเภอ/เขต</span> 
                                    <br>
                                    <span>{{$dataptg->district}}</span>
                                </div>
                                <div class="col">
                                    <span class="text-xs font-weight-bold mb-1">จังหวัด</span> 
                                    <br>
                                    <span>{{$dataptg->province}}</span>
                                </div>
                                <div class="col">
                                    <span class="text-xs font-weight-bold mb-1">รหัสไปรษณีย์</span> 
                                    <br>
                                    <span>{{$dataptg->zipcode}}</span>
                                </div>
                    </div>
                    @if(empty($dpsaccount))
                    
                    @else
                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <span class="text-xs font-weight-bold text-info mb-1">เลขที่บัญชี</span> 
                            <br>
                            <span>{{$dpsaccount->deposit_account_number}}</span>
                        </div>
                        <div class="col-3">
                            <span class="text-xs font-weight-bold text-info mb-1">ธนาคาร</span> 
                            <br>
                            <span>{{$dpsaccount->bank->name_bank}}</span>
                        </div>
                    </div>
                    @endif

                </div>
            </div>

          </div>

      </div>
      <!-- /.container-fluid -->
@stop