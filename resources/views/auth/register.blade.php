@extends('layouts.main')
@section('page_title', 'Register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="row">
                    <img class="logo" src="assets/image/logo.png">    
                </div>

                <h3 class="headder_text text_center margin_box20">
                    {{ __('สร้างบัญชีของคุณ') }}
                </h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="input_box form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="อีเมล" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="username" type="text" class="input_box form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="ชื่อผู้ใช้" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" class="input_box form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="รหัสผ่าน" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input_box form-control" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn_color btn_color_employ btn_width">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0 bottom_fixed">
                                <div class="col-md-8 offset-md-4 text_center">
                                    <h3 class="headder_text">
                                        หรือ สร้างบัญชีด้วย
                                    </h3>
                                </div> 
                                <div class="col-md-8 offset-md-4">
                                    <button class="btn_color_facebook btn_color_employ btn_width margin_box20">
                                        {{ __('Facebook') }}
                                    </button>
                                </div>
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
@endsection
