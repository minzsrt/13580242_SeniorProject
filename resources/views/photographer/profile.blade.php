@extends('layouts.mainmenu_p')
@section('page_title', 'Profile')
@section('content')

    <div class="wrap_container_head">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="img_profile">
                        <img src="{{ url(Auth::user()->avatar) }}">   
                    </div>
                </div>
                <div class="col" style="padding-top:20px;">
                    <span>{{ Auth::user()->username }}</span>
                    <div class="username_profile">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star"></i>        
                    </div>        
                </div>
                <div class="col text_right" style="padding-top:20px;">
                    <button id="actions" class="btn_layout_back">ตั้งค่า</button>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs nav-justified" role="tablist">
            <div class="slider"></div>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="true">
                    <img class="menu_list_profile" src="{{url('assets/image/album.svg')}}"><br>
                    <span class="menu_list_profile_text">Album</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2" role="tab" aria-controls="menu2" aria-selected="false">
                    <img class="menu_list_profile" src="{{url('assets/image/camera.svg')}}"><br>
                    <span class="menu_list_profile_text">About</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu3" role="tab" aria-controls="menu3" aria-selected="false">
                    <img class="menu_list_profile" src="{{url('assets/image/star.svg')}}"><br>
                    <span class="menu_list_profile_text">Review</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu4" role="tab" aria-controls="menu4" aria-selected="false">
                    <img class="menu_list_profile" src="{{url('assets/image/calendar.svg')}}"><br>
                    <span class="menu_list_profile_text">Calendar</span>
                </a>
            </li>
        </ul>
                                    
    </div>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade margin_top20 show active" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">
            <div class="container">
                <div class="card" style="border:0; margin:10px auto; ">
                <button class="btn btn_create" onclick="window.location.href='/createAlbum'">
                    <i class="fas fa-plus-circle"></i>
                </button> 
                </div>

                @if (session('alertdelete'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('alertdelete') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif
                
                @foreach($albums as $album)
                    @if( Auth::user()->id === $album->id_user )
                        <a href="{{ url("profile/{$username}/album/{$album->id}") }}">
                        <div class="card album_show_wrap">
                                        <div class="album_show">
                                            <div class="album_show_detail_group">
                                                <div class="float_left">
                                                    <span class="hastag_album">
                                                        {{ $album->category->name_category }}
                                                    </span>
                                                    <h3 class="caption_album">
                                                        {{ $album->name_album }}
                                                    </h3>
                                                </div>
                                            </div>
                                            
                                            <img class="card-img-top" src="{{url($album->cover_album)}}">    

                                            <!-- <div class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" style="overflow: inherit; max-height: 220px !important;">            
                                                    @php ($i = -1)
                                                    @foreach($image_albums as $index => $image_album)
                                                        @if( $album->id === $image_album->album_id )
                                                            @php ($i++)
                                                            <img class="card-img-top carousel-item {{ $i == '0' ? 'active' : '' }}" src="{{ url($image_album->name_image) }}"> 
                                                        @endif    
                                                    @endforeach
                                                </div>
                                            </div> -->
                                        </div>
                                </div>
                        </a>        
                    @endif    
                @endforeach
            </div>
        </div>

        <div class="tab-pane fade container" id="menu2" role="tabpanel" aria-labelledby="menu2-tab">

            <div class="container wrap_container_head">
                <div class="row">
                    <div class="col">
                        <h3 class="headder_text">ค่าบริการ</h3>
                    </div>
                </div>
            </div>
            @foreach($package_cards as $id_category => $package_card)
            <div onclick="window.location.href='{{ url("profile/{$username}/listPackage/{$package_card->id_category}") }}'" class="packagecard_box">    
                    <div class="row packagecard_box_padding">
                        <div class="col">
                            <span>{{ $package_card->category->name_category }}</span>
                        </div>
                        <!-- <div class="col text_right price_package">
                            <span>{{ $package_card->price }} ฿</span>
                        </div> -->
                        <div class="col-1 text_center">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="card" style="border:0; margin:10px auto; ">
                    <button onclick="window.location.href='/createPackagecardCategory'" class="btn btn_create">
                        <i class="fas fa-plus-circle"></i>
                    </button> 
            </div>

            <!-- <div class="container wrap_container_head">
                <div class="row">
                    <div class="col">
                        <h3 class="headder_text">อุปกรณ์ที่ใช้ในการถ่ายภาพ</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <span class="all_more_link">กล้อง</span><br>
                <label class="btn_layout_equipment">Canon EOS 1D X Mark II</label>
            </div>
            <div class="container">
                <span class="all_more_link">เลนส์</span><br>
                <label class="btn_layout_equipment">Canon 40mm f/2.8</label>
                <label class="btn_layout_equipment">Canon 50mm f/1.4</label>
            </div>
            <div class="container">
                <span class="all_more_link">แฟลช</span><br>
                <label class="btn_layout_equipment">Pop-Up Flash</label>
                <label class="btn_layout_equipment">External Flash</label>
            </div> -->
        </div>
 
        <div class="tab-pane fade margin_top20 container" id="menu3" role="tabpanel" aria-labelledby="menu3-tab">
            @foreach($reviews as $review)            
                <div class="card review_box margin_box20">
                    <div class="card-body review_box_head">
                        <div class="row">
                            <div class="col-2">
                                <div class="review_img_profile">
                                    <img src="{{url($review->user->avatar)}}">    
                                </div>
                            </div>
                            <div class="col-6 username_profile">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="review_username">{{$review->user->username}}</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="star-rating" id="rating{{$review->id}}">
                                            <span class="fas fa-star" data-rating{{$review->id}}="1"></span>
                                            <span class="fas fa-star" data-rating{{$review->id}}="2"></span>
                                            <span class="fas fa-star" data-rating{{$review->id}}="3"></span>
                                            <span class="fas fa-star" data-rating{{$review->id}}="4"></span>
                                            <span class="fas fa-star" data-rating{{$review->id}}="5"></span>
                                            <input type="hidden" id="rating{{$review->id}}" class="rating-value{{$review->id}}" value="{{$review->rating}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 all_more_link text_right">
                                <span>{{date_format($review->created_at, 'j F Y')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="review_body">
                        <p>
                        {{$review->comment}}
                        </p>
                    </div>
                </div>
            @endforeach        
        </div>
        <div class="tab-pane fade margin_top10" id="menu4" role="tabpanel" aria-labelledby="menu4-tab">
            <div class="calendar"></div>
        </div>
    </div>

    <a style="display: none;" id="logout" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <script src="{{ URL::asset('js/pignose.calendar.min.js') }}"></script>

    <script>
    $(document).ready(function(){
        $('#actions').click(function () {
            $.actions([
                [
                    {
                        text: '<a href="{{ url('/profile/'.Auth::user()->username.'/edit') }}">แก้ไขข้อมูลส่วนตัว</a>',
                        
                    },
                    {
                        text: '<font style="color:red;">ออกจากระบบ</font>',
                        onClick: function () {
                            document.getElementById('logout').click();
                        }
                    }
                ],
                [
                    {
                        text: 'ยกเลิก',
                    }
                ],

            ]);
        });

        // slide tab
        $(".nav-tabs a").click(function() {
            var position = $(this).parent().position();
            console.log(position);
            var width = $(this).parent().width();
            console.log(width);
            $(".slider").css({"left":+ position.left,"width":width});
        });
        var actWidth = $(".nav-tabs").find(".active").parent("li").width();
            console.log(actWidth);
        var actPosition = $(".nav-tabs .active").position();
        $(".slider").css({"left":+ actPosition.left,"width": actWidth});

        // rating
        var $star_rating = $(' .star-rating .fas');
        var SetRatingStar = function() {
            return $star_rating.each(function() {
                @foreach($reviews as $review)            
                if (parseInt($star_rating.siblings('input.rating-value{{$review->id}}').val()) >= parseInt($(this).data('rating{{$review->id}}'))) {
                    return $(this).addClass('checked');
                }
                @endforeach
            });
        };
        SetRatingStar();

        // calendar
        $('.calendar').pignoseCalendar({
            scheduleOptions: {
                colors: {
                    employed: '#2fabb7'
                }
            },
            schedules: [
                {
                name: 'employed',
                date: '2019-03-08'
                },
                {
                name: 'employed',
                date: '2019-03-08'
                },
                {
                name: 'employed',
                date: '2019-03-05',
                }
            ],
            select: function(date) {
                console.log('your first date', date);
                // window.onload = function() {
                //     document.getElementById("myLink").value = date;
                // } 
            }
        });

    });
    </script>

@stop