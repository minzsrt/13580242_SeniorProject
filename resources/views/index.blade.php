@extends('layouts.mainmenu_guest')
@section('page_title', 'Index')
@section('content')

    <section>
        <div class="container wrap_container_head">
            <!-- <div class="row">
                <div class="col">
                    <h3 class="headder_text">ช่างภาพแนะนำ</h3>
                </div>
                <div class="col text_right">
                    <a class="all_more_link" href="/recommendSetting"><i class="fas fa-ellipsis-v"></i></a> 
                </div>
            </div> -->
        </div>

        <div class="container">
                        @foreach($albums as $album)
                            <div class="card album_show_wrap">
                                            <div class="album_show">
                                                <div class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner" style="overflow: inherit; max-height: 220px !important;">            
                                                        @php ($i = -1)
                                                        @foreach($image_albums as $index => $image_album)
                                                            @if( $album->id === $image_album->album_id )
                                                                @php ($i++)
                                                                <img class="card-img-top carousel-item {{ $i == '0' ? 'active' : '' }}" src="{{ url($image_album->name_image) }}"> 
                                                            @endif    
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                            </div>
                        @endforeach

            </div> 
        </div>
    </section>

<div>

    <div class="container wrap_container_head">
        <div class="row">
            <div class="col">
                <h3 class="headder_text">รับปริญญา</h3>
            </div>
            <div class="col text_right">
                <!-- <a class="all_more_link" href="searchResult">ดูทั้งหมด</a>  -->
            </div>
        </div>
    </div>

    <div id="carouselExampleSlidesOnly" data-interval="false" data-interval="3000" class="carousel slide" data-ride="carousel" style="padding:10px;">
        <div class="carousel-inner" style="overflow: inherit;">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                <a class="a_getlink" href="{{ url('profile/Astudio') }}">
                                                <span>Astudio</span>
                                                </a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //////////////////// -->

<!-- <div>
    <div class="container wrap_container_head">
        <div class="row">
            <div class="col">
                <h3 class="headder_text">ภาพบุคคล/แฟชั่น</h3>
            </div>
            <div class="col text_right">
                <a class="all_more_link" href="/searchResult">ดูทั้งหมด</a> 
            </div>
        </div>
    </div>

    <div id="carouselExampleSlidesOnly" data-interval="5000" class="carousel slide" data-ride="carousel" style="padding:10px;">
        <div class="carousel-inner" style="overflow: inherit;">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- //////////////////// -->

<!-- <div>
    <div class="container wrap_container_head">
        <div class="row">
            <div class="col">
                <h3 class="headder_text">งานแต่งงาน</h3>
            </div>
            <div class="col text_right">
                <a class="all_more_link" href="#">ดูทั้งหมด</a> 
            </div>
        </div>
    </div>

    <div id="carouselExampleSlidesOnly" data-interval="3000" class="carousel slide" data-ride="carousel" style="padding:10px;">
        <div class="carousel-inner" style="overflow: inherit;">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- //////////////////// -->

<!-- <div>
    <div class="container wrap_container_head">
        <div class="row">
            <div class="col">
                <h3 class="headder_text">พรีเวดดิ้ง</h3>
            </div>
            <div class="col text_right">
                <a class="all_more_link" href="#">ดูทั้งหมด</a> 
            </div>
        </div>
    </div>

    <div id="carouselExampleSlidesOnly" data-interval="5000" class="carousel slide" data-ride="carousel" style="padding:10px;">
        <div class="carousel-inner" style="overflow: inherit;">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- //////////////////// -->

<!-- <div>
    <div class="container" style="margin: 20px 0 0 !important;">
        <div class="row">
            <div class="col">
                <h3 style="font-size:18px;">งานอีเวนต์</h3>
            </div>
        </div>
    </div>

    <div id="carouselExampleSlidesOnly" data-interval="3000" class="carousel slide" data-ride="carousel" style="padding:10px;">
        <div class="carousel-inner" style="overflow: inherit;">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- //////////////////// -->

<!-- <div>
    <div class="container wrap_container_head">
        <div class="row">
            <div class="col">
                <h3 class="headder_text">สถาปัตยกรรม</h3>
            </div>
            <div class="col text_right">
                <a class="all_more_link" href="#">ดูทั้งหมด</a> 
            </div>
        </div>
    </div>
    
    <div id="carouselExampleSlidesOnly" data-interval="5000" class="carousel slide" data-ride="carousel" style="padding:10px;">
        <div class="carousel-inner" style="overflow: inherit;">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- //////////////////// -->

<!-- <div>
    <div class="container wrap_container_head">
        <div class="row">
            <div class="col">
                <h3 class="headder_text">สินค้า/อาหาร</h3>
            </div>
            <div class="col text_right">
                <a class="all_more_link" href="#">ดูทั้งหมด</a> 
            </div>
        </div>
    </div>

    <div id="carouselExampleSlidesOnly" data-interval="3000" class="carousel slide" data-ride="carousel" style="padding:10px;">
        <div class="carousel-inner" style="overflow: inherit;">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show03.jpg" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar04.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="card col" style="margin:5px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
                                
                                <div style="width:100%; height:140px; text-align:center; overflow: hidden; border-radius: 10px 10px 0 0;">
                                    <img class="card-img-top" src="assets/image/img_show01.png" style="width:auto; height:100%;">    
                                </div>

                                <div class="card-body" style="padding:10px">
                                    <div class="row">
                                        <div class="col-3">
                                            <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                                                <img src="assets/image/avatar05.jpg" style="height:100%;">    
                                            </div>
                                        </div>
                                        <div class="col-9" style="font-size:10px;">
                                            <div class="row">
                                                <div class="col-12" style="font-size:14px;">
                                                    <a class="a_getlink" href="{{ url("profilePhotographer") }}"><a class="a_getlink" href="{{ url("profilePhotographer") }}"><span>Username</span></a></a>
                                                </div>
                                                <div class="col-12">
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star checked"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="container">
    <div class="row">
        <div class="col banner">
            <a href="/regPhotographer" class="a_getlink">
            <img class="img-fluid" src="assets/image/banner_invite.png">    
            </a>
        </div>
    </div>
</div> -->

<!-- //////////////////// -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
@stop
