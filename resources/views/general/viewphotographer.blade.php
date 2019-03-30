@extends('layouts.mainprofile')
@section('page_title', 'Profile')
@section('link_back', '/profile/'.Auth::user()->username)
@section('content')

    <div class="wrap_container_head">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="img_profile">
                        <img src="{{ url($user->avatar) }}">   
                    </div>
                </div>
                <div class="col" style="padding-top:20px;">
                    <span>{{$user->username}}</span>
                    <div class="username_profile">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star"></i>        
                    </div>        
                </div>
            </div>
        </div>

        <ul class="menuslide nav nav-tabs nav-justified" role="tablist">
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
    
    <div class="tab-content">
        <div class="tab-pane fade margin_top20 show active" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">
                <!-- <div class="center" class="margin_bomtom20" role="tablist">
                @if(!empty($albums))
                            <a data-toggle="album" href="#album1" role="tab" aria-controls="album1" aria-selected="true">
                            <div class="btn_catagory" style="height:60px;" >
                                <div class="btn_catagory_text">
                                    <span>ทั้งหมด</span> 
                                </div>
                            </div>
                            </a>

                    @foreach($category_albums as $category_album)
                            <a data-toggle="album" href="#album2" role="tab" aria-controls="album2" aria-selected="true">
                            <div class="btn_catagory" style="height:60px;">
                                <div class="btn_catagory_text">
                                    <span>{{$category_album->category->name_category}}</span> 
                                </div>
                            </div>
                            </a>
                    @endforeach
                @else
                @endif
                </div>     -->

                <div class="container margin_top20">
                    
                    <div class="container">
                        @foreach($albums as $album)
                            @if( $user->id === $album->id_user )
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
                                            </div>
                                        </div>
                                </a>        
                            @endif    
                        @endforeach
                    </div>
                    
                </div>
        </div><!-- end menu 1 -->

        <div class="tab-pane fade container" id="menu2" role="tabpanel" aria-labelledby="menu2-tab">
                <div class="container wrap_container_head">
                    <div class="row">
                        <div class="col">
                            <h3 class="headder_text">ค่าบริการ</h3>
                        </div>
                    </div>
                </div>
                <div class="container">
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
                </div>
        </div><!-- end menu 2 -->

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
        </div><!-- end menu 3 -->

        <div class="tab-pane fade margin_top10" id="menu4" role="tabpanel" aria-labelledby="menu4-tab">


            <!-- <input type="text" id="text-calendar" class="calendar" /> -->


            <div class="calendar"></div>

            <section style="height:60px;"></section>
        </div><!-- end menu 4 -->
    </div><!-- end tab-content -->




    <nav class="container nav_bottom nav_bottom_profile" style="background: #fff;">
        <div class="row">
            <div class="col" style="display: inherit; padding-top:10px;">
                <form action="/orderstep1" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$user->id}}" name="id_user">
                </form>
                <button class="btn btn_color" data-toggle="modal" data-target="#myModal" style="width:100%; margin:0; padding-top:10px;">จ้างช่างภาพ</button>
                <!-- <a href="{{ url("{$user->username}/order/step1") }}" class="btn btn_color" style="width:100%; margin:0; padding-top:10px;" target="_blank">จ้างช่างภาพ</a> -->
            </div>
        </div>
    </nav>

    <!-- Modal iframeOrder -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <iframe class="iframeOrder" src="{{ url("{$user->username}/order/step1") }}" frameborder="0" allowtransparency="true"></iframe>  
            </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ URL::asset('js/pignose.calendar.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        
        $('.center').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '100px',
                slidesToShow: 1
            }
            }
        ]
        });

        $(".menuslide a").click(function() {
            var position = $(this).parent().position();
            console.log(position);
            var width = $(this).parent().width();
            console.log(width);
            $(".slider").css({"left":+ position.left,"width":width});
        });
        var actWidth = $(".menuslide").find(".active").parent("li").width();
            console.log(actWidth);
        var actPosition = $(".menuslide .active").position();
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
                @foreach ($disableddate as $disdate)
                {
                name: 'employed',
                date: '{{$disdate->date_work}}'
                },
                @endforeach
                
            ],
            disabledDates:[
                @foreach ($disableddate as $disdate)
                
                '{{$disdate->date_work}}',
                
                @endforeach
            ],

            select: function(date) {
                console.log('your first date', date);
                // window.onload = function() {
                //     document.getElementById("myLink").value = date;
                // } 
            }
        });

        // $('input.calendar').pignoseCalendar({
        //     format: 'YYYY-MM-DD' // date format string. (2017-02-02)
        // });


    });
  </script>

@stop