@extends('layouts.mainmenu_admin')
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ประเภทงาน</h1>
            <button type="button" class="text-white d-sm-inline-block btn btn-sm bg_color_gradient" data-toggle="modal" data-target="#createCategory">
            <i class="fas fa-plus-circle fa-sm text-white"></i> เพิ่มประเภทงาน
            </button>
          </div>

            <div class="modal fade" id="createCategory" tabindex="-1" role="dialog" aria-labelledby="createCategoryLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-info" id="createCategoryLabel">เพิ่มประเภทงาน</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/admin/categories/post" method="post">
                    {{ csrf_field() }}
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="recipient-name" class="all_more_link">ชื่อประเภทงาน:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="name_category">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gray-200" data-dismiss="modal">ยกเลิก</button>
                            <button type="submit" class="btn bg_color_gradient text-white">เพิ่ม</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            @if (session('alertpost'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('alertpost') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif

            @if (session('alertedit'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            
            {{ session('alertedit') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif

            @if (session('alertdelete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            
            {{ session('alertdelete') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ประเภท</th>
                    <th scope="col">แก้ไข</th>
                    <th scope="col">ลบ</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                  <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name_category}}</td>
                    <td>
                        <a class="btn badge badge-info color_white" data-toggle="modal" data-target="#editCategory{{$category->id}}">แก้ไข</a>
                        <div class="modal fade" id="editCategory{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="editCategory{{$category->id}}Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-info" id="editCategory{{$category->id}}Label">แก้ไขประเภทงาน</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::model($category, ['method' => 'GET','action' => ['AdminController@categoryupdate',$category->id]]) !!}
                                {{ csrf_field() }}
                                    <div class="modal-body">
                                            <div class="form-group">
                                                <label for="recipient-name" class="all_more_link">ชื่อประเภทงาน:</label>
                                                <input type="text" class="form-control" id="recipient-name" name="name_category" value="{{$category->name_category}}">
                                                
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-gray-200" data-dismiss="modal">ยกเลิก</button>
                                        <button type="submit" class="btn bg_color_gradient text-white">แก้ไข</button>
                                    </div>
                                {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                      <a class="btn badge badge-danger color_white" 
                        href="{{ url("admin/categories/{$category->id}/destroy") }}">
                            ลบ
                      </a>    
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="col-lg-12 mb-4">
              {{ $categories->links() }}
            </div>

          </div>

      </div>
      <!-- /.container-fluid -->
@stop