<!Doctype html>
<html>
<head>
	<title>@yield('page_title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
	<link href="{{ url('/css/style.css')}}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body style="font-family: 'Prompt', sans-serif;">

<nav>
        <div class="container" style="height:100%;">
            <div class="row showmenu logomenu">
                <div class="col logosize">
                    <button class="btn_menu_list" onclick="window.location.href='{{url('/')}}'">
                        <img class="btn_menu_list_logo" src="{{url('assets/image/logo.png')}}"></button>
                </div>
                <div class="col textlogo text-info">
                FINDPHO.CO
                </div>
            </div>
            <div class="row wrapmenuright" style="height:100%;">
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='{{url('/')}}'">
                    @if (trim($__env->yieldContent('page_title')==='Index'))
                        <img class="menu_list_active" src="{{url('assets/image/circle.svg')}}">
                    @endif
                    <img class="menu_list" src="{{url('assets/image/home-button.svg')}}">
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='{{url('/search')}}'">
                    @if (trim($__env->yieldContent('page_title')==='Search'))
                        <img class="menu_list_active" src="{{url('assets/image/circle.svg')}}">
                    @endif
                    <img class="menu_list" src="{{url('assets/image/search.svg')}}">
                </button>
                </div>
                <!-- <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='{{url('/chatchannel')}}'">
                    @if (trim($__env->yieldContent('page_title')==='Chatchannel'))
                        <img class="menu_list_active" src="{{url('assets/image/circle.svg')}}">
                    @endif
                    <img class="menu_list" src="{{url('assets/image/speech-bubbles.svg')}}" >
                </button>
                </div> -->
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/notification/{{Auth::user()->username}}'">
                    @if (trim($__env->yieldContent('page_title')==='Notification'))
                        <img class="menu_list_active" src="{{url('assets/image/circle.svg')}}">
                    @endif
                    <img class="menu_list" src="{{url('assets/image/notification.svg')}}" >
                </button>
                </div>
                <div class="col">
                @if(Auth::guest())
                <button class="btn_menu_list" onclick="window.location.href='/home'">
                    @if (trim($__env->yieldContent('page_title')==='Profile'))
                        <img class="menu_list_active" src="{{url('assets/image/circle.svg')}}">
                    @endif
                    <img class="menu_list" src="{{url('assets/image/friend.svg')}}" >
                </button>
                @else
                <button class="btn_menu_list" onclick="window.location.href='/profile/{{Auth::user()->username}}'">
                    @if (trim($__env->yieldContent('page_title')==='Profile'))
                        <img class="menu_list_active" src="{{url('assets/image/circle.svg')}}">
                    @endif
                    <img class="menu_list" src="{{url('assets/image/friend.svg')}}" >
                </button>
                @endif

                </div>
            </div>
        </div>
</nav>

<section style="height:60px; padding:20px;"></section>


<div class="wrapcontent">
	@yield('content')
</div>

@auth
<script>
	const userID = {!! Auth::id() !!}
</script>
<script src="{{ mix('js/app.js') }}"></script>
@endauth
@stack('scripts')

</body>
</html>