
@extends('layouts.main')

@section('content')
    <div class="container">
    {!! Form::model($user, ['route' => ['auth.update'], 'method' => 'POST']) !!}
    <div class="container">
        <div class="row">
                
                <div class="col-md" style="margin-top:10px;">
                    <span class="all_more_link">ชื่อผู้ใช้</span>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                            {!! Form::text('username', null, ['class' => 'form-control input_box', 'id' => 'username']) !!}
                            @if($errors)
                                @foreach($errors->all() as $error)
                                    <span class="all_more_link" style="color:red;">@if ($loop->first) {{ $error }} @endif</span>
                                @endforeach
                            @endif
                            <div>
                        </div>
                    </div>
                </div>
                <div class="col-md" style="margin-top:10px;">
                    <span class="all_more_link">อีเมล</span>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                            {!! Form::text('email', null, ['class' => 'form-control input_box', 'id' => 'email']) !!}
                            @if($errors)
                                @foreach($errors->all() as $error)
                                    <span class="all_more_link" style="color:red;">@if ($loop->last) {{ $error }} @endif</span>
                                @endforeach
                            @endif
                            <div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md text_center" style="margin-top:10px;">
                    {!! Form::submit('Submit', ['class' => 'btn btn_color']) !!}
                </div>

        </div>        
    </div>
    {!! Form::close() !!}
    </div>

@endsection