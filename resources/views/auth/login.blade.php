@extends('layouts.main')
@section('page_title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="row ">
                    <img class="logo" src="assets/image/logo.png">    
                </div>

                <h3 class="headder_text text_center margin_box20">
                    {{ __('เข้าสู่ระบบ') }}
                </h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="input_box 
                                form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="อีเมล" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
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

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 text_right">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link all_more_link animsition-link" href="{{ route('password.request') }}">
                                        {{ __('ลืมรหัสผ่านใช่ไหม?') }}
                                    </a>
                                @endif
                            </div> 
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn_color btn_color_employ btn_width margin_box20">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                            <!-- <div class="form-group row mb-0 bottom_fixed">
                                <div class="col-md-8 offset-md-4 text_center">
                                    <h3 class="headder_text">
                                        หรือ เข้าสู่ระบบด้วย
                                    </h3>
                                </div> 
                                <div class="col-md-8 offset-md-4">
                                    <button class="btn_color_facebook btn_color_employ btn_width margin_box20">
                                        {{ __('Facebook') }}
                                    </button>
                                </div>
                            </div> -->
                        
                    </form>
                </div>
        </div>
    </div>
</div>
<!-- animsition.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/animsition.min.js"></script>
<script>
$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in-right-sm',
    outClass: 'fade-out-right-sm',
    inDuration: 300,
    outDuration: 300,
    linkElement: '.animsition-link',
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
</script>
@endsection
