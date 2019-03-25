@extends('layouts.mainmenu_admin')
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">
          
          <div aria-label="breadcrumb">
            <ol class="breadcrumb text-xs">
                <li class="breadcrumb-item">
                  <a class="text-info" href="/admin/users/general">ผู้ใช้งานทั่วไป</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{$user->id}}</li>
            </ol>
          </div>

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{$user->username}}</h1>
            <div>
            <a href="#" class="text-white d-none d-sm-inline-block btn btn-sm bg_color_gradient">
                <i class="fas fa-edit fa-sm text-white"></i> แก้ไข
            </a>
            <a class="text-white d-none d-sm-inline-block btn btn-sm btn-danger" href="{{ url("/admin/users/genneral/{$user->id}")}}">
            <i class="far fa-trash-alt"></i> ลบผู้ใช้
            </a>
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
                    </div>
                </div>
            </div>

          </div>

      </div>
      <!-- /.container-fluid -->
@stop