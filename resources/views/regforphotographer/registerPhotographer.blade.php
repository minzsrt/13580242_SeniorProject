@extends('layouts.main_empty')
@section('page_title', 'Register for a Photographer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="row">
                    <img class="logox2" src="assets/image/logo.png">    
                </div>

                <div class="text_center">
                    <h3 class="headder_text margin_top20">
                        {{ __('ลงทะเบียนเป็นช่างภาพ') }}
                    </h3>
                    <!-- <span class="">ข้อมูลเบื้องต้น</span> -->
                </div>

                <div class="card-body">
                    {!! Form::open(['url' => 'invitePhotographer']) !!}
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" type="text" class="input_box form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="ชื่อ-นามสกุลจริง" required>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="idcard" type="text" class="input_box form-control{{ $errors->has('idcard') ? ' is-invalid' : '' }}" name="idcard" value="{{ old('idcard') }}" placeholder="เลขที่บัตรประจําตัวประชาชน" required>
                                @if ($errors->has('idcard'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idcard') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input placeholder="วันเกิด" class="form-control input_box" type="text" onfocus="(this.type='date')" name="birthday">  
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                {!! Form::select('sex',['ชาย' => 'ชาย', 'หญิง' => 'หญิง'],null,['class'=>'form-control select_search' ,'placeholder' => 'เพศของคุณ']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                {!! Form::text('address', null, ['class'=>'form-control input_box','placeholder' => 'ที่อยู่']) !!} 
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="form-group col">
                                {!! Form::text('sub_district', null, ['id'=>'district','class'=>'form-control input_box','placeholder' => 'ตำบล']) !!} 
                            </div>
                            <div class="form-group col">
                                {!! Form::text('district', null, ['id'=>'amphoe','class'=>'form-control input_box','placeholder' => 'อำเภอ']) !!} 
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                {!! Form::text('province', null, ['id'=>'province','class'=>'form-control input_box','placeholder' => 'จังหวัด']) !!} 
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                {!! Form::text('zipcode', null, ['id'=>'zipcode','class'=>'form-control input_box','placeholder' => 'รหัสไปรษณีย์']) !!} 
                            </div>
                        </div>

                        <div class="form-group row margin_bottom20">
                            <div class="col-md-6">
                                {!! Form::text('phone', null, ['class'=>'form-control input_box','placeholder' => 'เบอร์ติดต่อ']) !!} 
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input class="form-control input_box" type="hidden" name="id_user" value="{{Auth::user()->id}}">  
                            </div>
                        </div>

                        <div class="row bottom_fixed">
                            <div class="form-group col">
                                <button type="submit" class="btn_color btn_color_employ btn_width">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>

                
            
        </div>
    </div>
</div>



@endsection
