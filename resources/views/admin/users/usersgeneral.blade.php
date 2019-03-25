@extends('layouts.mainmenu_admin')
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ผู้ใช้งานทั่วไป</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ผู้ใช้งาน</th>
                    <th scope="col">อีเมล</th>
                    <th scope="col">Active</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      <!-- <a class="btn badge badge-info" href="{{ url("/profile/{$user->username}")}}" target="_blank">ดูโปรไฟล์</a> -->
                      <a class="btn badge badge-info" href="{{ url("/admin/users/general/{$user->id}")}}">ดูข้อมูล</a>
                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="col-lg-12 mb-4">
              {{ $users->links() }}
            </div>

          </div>

      </div>
      <!-- /.container-fluid -->
@stop