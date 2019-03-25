@extends('layouts.mainmenu_admin')
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ยืนยันตัวตน</h1>
          </div>

            @if (session('alertedit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('alertedit') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif

        <ul class="nav nav-tabs" role="tablist" style="background:none; box-shadow:none;">
            <div class="slider"></div>
            <li class="nav-item width200 text_center">
                <a class="nav-link active" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="true">
                    <span class="headder_text">รอการตรวจสอบ</span>
                </a>
            </li>
            <li class="nav-item width200 text_center">
                <a class="nav-link" data-toggle="tab" href="#menu2" role="tab" aria-controls="menu2" aria-selected="false">
                    <span class="headder_text">ยืนยันตัวตนแล้ว</span>
                </a>
            </li>
            <li class="nav-item width200 text_center">
                <a class="nav-link" data-toggle="tab" href="#menu3" role="tab" aria-controls="menu3" aria-selected="false">
                    <span class="headder_text">ปฏิเสธการยืนยันตัวตน</span>
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade margin_top20 show active" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ช่างภาพ</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col">ตรวจสอบ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($verifylist as $verify)
                    @if($verify->id_status == '1')
                    <tr>
                        <th scope="row">{{$verify->id}}</th>
                        <td>
                        {{$verify->user->username}}
                        </td>
                        <td>{{$verify->statusverify->status_verify}}</td>
                        <td>
                            <a class="btn badge badge-info color_white" data-toggle="modal" data-target="#editVerify{{$verify->id}}">ตรวจสอบ</a>
                            <div class="modal fade" id="editVerify{{$verify->id}}" tabindex="-1" role="dialog" aria-labelledby="editVerify{{$verify->id}}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-info" id="editVerify{{$verify->id}}Label">ตรวจสอบยืนยันตัวตน</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {!! Form::model($verify, ['method' => 'GET','action' => ['AdminController@verifyupdate',$verify->id]]) !!}
                                    {{ csrf_field() }}
                                        <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md">
                                                    <img src="{{ url($verify->copy_id_card) }}" id="profile-img-tag" class="card-img-top"/>
                                                    </div>
                                                    <div class="col-md">
                                                        <h3 class="headder_text text-info">ข้อมูลช่างภาพ {{$verify->user->username}}</h3>
                                                        @foreach($photographers as $photographer)
                                                            @if($verify->id_user == $photographer->id_user)
                                                                
                                                                <label for="recipient-name" class="all_more_link">ชื่อ-นามสกุล : </label>
                                                                    <span class="text-gray-600">{{$photographer->name}}</span><br>

                                                                <label for="recipient-name" class="all_more_link">เลขประจำตัวประชาชน : </label>
                                                                    <span class="text-gray-600">{{$photographer->idcard}}</span><br>

                                                                <label for="recipient-name" class="all_more_link">วันเกิด : </label>
                                                                    <span class="text-gray-600">{{ date("jS M Y", strtotime($photographer->birthday)) }}</span><br>

                                                                <label for="recipient-name" class="all_more_link">ที่อยู่ : </label>
                                                                <span class="fontsize14 text-gray-600">
                                                                {{ $photographer->address}}<br>
                                                                {{' ตำบล/แขวง'.$photographer->sub_district.' อำเภอ/เขต'.$photographer->district.' จังหวัด'.$photographer->province}}<br>
                                                                </span> 
                                                            @endif
                                                        @endforeach
                                                        <hr>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="all_more_link text-info">อัปเดตสถานะ:</label>
                                                            {!! Form::select('id_status', $statusverify, null, ['class' => 'form-control']) !!}
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn bg-gray-200" data-dismiss="modal">ยกเลิก</button>
                                            <button type="submit" class="btn bg_color_gradient text-white">บันทึก</button>
                                        </div>
                                    {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
                {{ $verifylist->links() }}
            </div>

            <div class="tab-pane fade margin_top20" id="menu2" role="tabpanel" aria-labelledby="menu2-tab">
            <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ช่างภาพ</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col">ตรวจสอบ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($verifylist as $verify)
                    @if($verify->id_status == '2')
                    <tr>
                        <th scope="row">{{$verify->id}}</th>
                        <td>
                        {{$verify->user->username}}
                        </td>
                        <td>{{$verify->statusverify->status_verify}}</td>
                        <td>
                            <a class="btn badge badge-info color_white" data-toggle="modal" data-target="#editVerify{{$verify->id}}">ตรวจสอบ</a>
                            <div class="modal fade" id="editVerify{{$verify->id}}" tabindex="-1" role="dialog" aria-labelledby="editVerify{{$verify->id}}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-info" id="editVerify{{$verify->id}}Label">ตรวจสอบยืนยันตัวตน</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {!! Form::model($verify, ['method' => 'GET','action' => ['AdminController@verifyupdate',$verify->id]]) !!}
                                    {{ csrf_field() }}
                                        <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md">
                                                    <img src="{{ url($verify->copy_id_card) }}" id="profile-img-tag" class="card-img-top"/>
                                                    </div>
                                                    <div class="col-md">
                                                        <h3 class="headder_text text-info">ข้อมูลช่างภาพ {{$verify->user->username}}</h3>
                                                        @foreach($photographers as $photographer)
                                                            @if($verify->id_user == $photographer->id_user)
                                                                
                                                                <label for="recipient-name" class="all_more_link">ชื่อ-นามสกุล : </label>
                                                                    <span class="text-gray-600">{{$photographer->name}}</span><br>

                                                                <label for="recipient-name" class="all_more_link">เลขประจำตัวประชาชน : </label>
                                                                    <span class="text-gray-600">{{$photographer->idcard}}</span><br>

                                                                <label for="recipient-name" class="all_more_link">วันเกิด : </label>
                                                                    <span class="text-gray-600">{{ date("jS M Y", strtotime($photographer->birthday)) }}</span><br>

                                                                <label for="recipient-name" class="all_more_link">ที่อยู่ : </label>
                                                                <span class="fontsize14 text-gray-600">
                                                                {{ $photographer->address}}<br>
                                                                {{' ตำบล/แขวง'.$photographer->sub_district.' อำเภอ/เขต'.$photographer->district.' จังหวัด'.$photographer->province}}<br>
                                                                </span> 
                                                            @endif
                                                        @endforeach
                                                        <hr>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="all_more_link text-info">อัปเดตสถานะ:</label>
                                                            {!! Form::select('id_status', $statusverify, null, ['class' => 'form-control']) !!}
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn bg-gray-200" data-dismiss="modal">ยกเลิก</button>
                                            <button type="submit" class="btn bg_color_gradient text-white">บันทึก</button>
                                        </div>
                                    {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
                {{ $verifylist->links() }}
            </div>

            <div class="tab-pane fade margin_top20" id="menu3" role="tabpanel" aria-labelledby="menu3-tab">
            <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ช่างภาพ</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col">ตรวจสอบ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($verifylist as $verify)
                    @if($verify->id_status == '3')
                    <tr>
                        <th scope="row">{{$verify->id}}</th>
                        <td>
                        {{$verify->user->username}}
                        </td>
                        <td>{{$verify->statusverify->status_verify}}</td>
                        <td>
                            <a class="btn badge badge-info color_white" data-toggle="modal" data-target="#editVerify{{$verify->id}}">ตรวจสอบ</a>
                            <div class="modal fade" id="editVerify{{$verify->id}}" tabindex="-1" role="dialog" aria-labelledby="editVerify{{$verify->id}}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-info" id="editVerify{{$verify->id}}Label">ตรวจสอบยืนยันตัวตน</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {!! Form::model($verify, ['method' => 'GET','action' => ['AdminController@verifyupdate',$verify->id]]) !!}
                                    {{ csrf_field() }}
                                        <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md">
                                                    <img src="{{ url($verify->copy_id_card) }}" id="profile-img-tag" class="card-img-top"/>
                                                    </div>
                                                    <div class="col-md">
                                                        <h3 class="headder_text text-info">ข้อมูลช่างภาพ {{$verify->user->username}}</h3>
                                                        @foreach($photographers as $photographer)
                                                            @if($verify->id_user == $photographer->id_user)
                                                                
                                                                <label for="recipient-name" class="all_more_link">ชื่อ-นามสกุล : </label>
                                                                    <span class="text-gray-600">{{$photographer->name}}</span><br>

                                                                <label for="recipient-name" class="all_more_link">เลขประจำตัวประชาชน : </label>
                                                                    <span class="text-gray-600">{{$photographer->idcard}}</span><br>

                                                                <label for="recipient-name" class="all_more_link">วันเกิด : </label>
                                                                    <span class="text-gray-600">{{ date("jS M Y", strtotime($photographer->birthday)) }}</span><br>

                                                                <label for="recipient-name" class="all_more_link">ที่อยู่ : </label>
                                                                <span class="fontsize14 text-gray-600">
                                                                {{ $photographer->address}}<br>
                                                                {{' ตำบล/แขวง'.$photographer->sub_district.' อำเภอ/เขต'.$photographer->district.' จังหวัด'.$photographer->province}}<br>
                                                                </span> 
                                                            @endif
                                                        @endforeach
                                                        <hr>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="all_more_link text-info">อัปเดตสถานะ:</label>
                                                            {!! Form::select('id_status', $statusverify, null, ['class' => 'form-control']) !!}
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn bg-gray-200" data-dismiss="modal">ยกเลิก</button>
                                            <button type="submit" class="btn bg_color_gradient text-white">บันทึก</button>
                                        </div>
                                    {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
                {{ $verifylist->links() }}
            </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@stop