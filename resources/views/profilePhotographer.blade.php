<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile Photographer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
    
    <section style="height:60px; padding:20px;">    
        <button class="btn_layout_back">กลับ</button> 
    </section>

    <div class="container wrap_container_head">
        <div class="row">
            <div class="col-3">
                <div style="width:80px; height:80px; border-radius:40px; overflow: hidden;">
                    <img src="assets/image/avatar01.jpg" style="height:100%;">   
                </div>
            </div>
            <div class="col" style="padding-top:20px;">
                <span>Username</span>
                <div style="font-size:10px;">
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>        
                </div>        
            </div>
            <div class="col text_right" style="padding-top:20px;">
                <button class="btn_color btn_color_follow">ติดตาม</button>
            </div>
        </div>

        <ul class="nav nav-tabs row" style="padding:0; margin-bottom:20px;">
            <li class="nav-item col text_center" style="padding:0;">
            <a class="nav-link active" data-toggle="tab" href="#menu1">
                <img class="menu_list_profile" src="assets/image/album.svg"><br>
                <span class="menu_list_profile_text">Album</span>
            </a>
            </li>
            <li class="nav-item col text_center" style="padding:0;">
                <a class="nav-link" data-toggle="tab" href="#menu2">
                    <img class="menu_list_profile" src="assets/image/camera.svg"><br>
                    <span class="menu_list_profile_text">About</span>
                </a>
            </li>
            <li class="nav-item col text_center" style="padding:0;">
            <a class="nav-link" data-toggle="tab" href="#menu3">
                <img class="menu_list_profile" src="assets/image/star.svg"><br>
                <span class="menu_list_profile_text">Review</span>
            </a>
            </li>
            <li class="nav-item col text_center" style="padding:0;">
                <a class="nav-link" data-toggle="tab" href="#menu4">
                    <img class="menu_list_profile" src="assets/image/calendar.svg"><br>
                    <span class="menu_list_profile_text">Calendar</span>
                </a>
            </li>
            
        </ul>

    </div>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="menu1">
        <div class="center" style="margin-bottom:20px;">
                <div class="btn_catagory" style="height:60px;">
                    <div class="btn_catagory_text">
                        <span>ทั้งหมด</span> 
                    </div>
                </div>
                <div class="btn_catagory" style="height:60px;">
                    <div class="btn_catagory_text">
                        <span>รับปริญญา</span> 
                    </div>
                </div>
                <div class="btn_catagory" style="height:60px;">
                    <div class="btn_catagory_text">
                        <span>ภาพบุคคล/แฟชั่น</span> 
                    </div>
                </div>
                <div class="btn_catagory" style="height:60px;">
                    <div class="btn_catagory_text">
                        <span>งานแต่งงาน</span> 
                    </div>
                </div>
                <div class="btn_catagory" style="height:60px;">
                    <div class="btn_catagory_text">
                        <span>พรีเวดดิ้ง</span> 
                    </div>
                </div>
                <div class="btn_catagory" style="height:60px;">
                    <div class="btn_catagory_text">
                        <span>งานอีเวนต์</span> 
                    </div>
                </div>
                <div class="btn_catagory" style="height:60px;">
                    <div class="btn_catagory_text">
                        <span>สถาปัตยกรรม</span> 
                    </div>
                </div>
                <div class="btn_catagory" style="height:60px;">
                    <div class="btn_catagory_text">
                        <span>สินค้า/อาหาร</span> 
                    </div>
                </div>
        </div>
        <div class="container">
            @foreach($albums as $album)
                <div class="card album_show_wrap">
                        <div class="album_show">
                            <div class="album_show_detail_group">
                                <div class="float_left">
                                    <span class="hastag_album">ภาพถ่ายบุคคล</span>
                                    <h3 class="caption_album">{{ $album->caption }}</h3>
                                </div>
                                <div class="col text_right fav_count">
                                    <span>614 </span><img class="btn_fav" src="assets/image/heart_layout.svg">
                                </div>
                            </div>
                            <img class="card-img-top" src="assets/image/img_show_020{{ $album->id_album }}.jpg">    
                        </div>
                </div>
            @endforeach
        </div>
    </div>
    

  <div class="tab-pane container" id="menu2">
        <div class="container wrap_container_head">
            <div class="row">
                <div class="col">
                    <h3 class="headder_text">ค่าบริการ</h3>
                </div>
            </div>
        </div>
        <div onclick="window.location.href='/package'" style="cursor: pointer; width:100%; height:60px; margin-bottom:20px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
            <div class="row" style="padding:18px 20px;">
                <div class="col">
                    <span>รับปริญญา</span>
                </div>
                <div class="col text_right price_package">
                    <span>900 - 4,500 ฿</span>
                </div>
                <div class="col-1 text_center">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>        
        </div>
        <div onclick="window.location.href='/package'" style="cursor: pointer; width:100%; height:60px; margin-bottom:20px; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
            <div class="row" style="padding:18px 20px;">
                <div class="col">
                    <span>ภาพบุคคล/แฟชั่น</span>
                </div>
                <div class="col text_right price_package">
                    <span>600 - 2,500 ฿</span>
                </div>
                <div class="col-1 text_center">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>        
        </div>
        <div class="container wrap_container_head">
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
        </div>
    </div>

    <div class="tab-pane container" id="menu3">
        <div class="card" style="padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
            <div class="card-body" style="padding:10px; border-top-left-radius: 10px; border-top-right-radius: 10px; background:#F2F2F2;">
                <div class="row">
                    <div class="col-2">
                        <div style="width:40px; height:40px; border-radius:20px; overflow: hidden;">
                            <img src="assets/image/avatar05.jpg" style="height:100%;">    
                        </div>
                    </div>
                    <div class="col-6" style="font-size:10px;">
                        <div class="row">
                            <div class="col-12" style="font-size:14px; font-family: 'Prompt', Regular;">
                                <span>Username</span>
                            </div>
                            <div class="col-12">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 all_more_link text_right">
                        <span>ตุลาคม 2561</span>
                    </div>
                </div>
            </div>
            <div style="width:100%; height:auto; overflow: hidden; padding:10px; font-size:12px;">
                <p style="margin:0;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper
                arcu sed purus aliquet venenatis. Sed a fermentum risus
                </p>
            </div>
        </div>
    </div>
    <div class="tab-pane container" id="menu4">
        <div class="date_r">
            <div class="row text_center">
                <div class="col">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
                <div class="col ">
                JUNE 2017
                </div>
                <div class="col">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>
            
            <table class="datepicker text_center">
                    <tbody>
                        <tr>
                            <th>S</th>
                            <th>M</th>
                            <th>T</th>
                            <th>W</th>
                            <th>T</th>
                            <th>F</th>
                            <th>S</th>
                        </tr>
                        <tr>
                            <td style="opacity: 0.5;">28</td>
                            <td style="opacity: 0.5;">29</td>
                            <td style="opacity: 0.5;">30</td>
                            <td style="opacity: 0.5;">31</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>12</td>
                            <td class="activedate">13</td>
                            <td>14</td>
                            <td class="active_employ_date">15</td>
                            <td>16</td>
                            <td class="active_employ_date">17</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>19</td>
                            <td class="active_employ_date">20</td>
                            <td>21</td>
                            <td>22</td>
                            <td class="active_employ_date">23</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td style="opacity: 0.5;">1</td>
                        </tr>
                    </tbody>
            </table>
        </div>
  </div>
</div>

    <nav class="container nav_bottom nav_bottom_profile">
        <div class="row">
            <div class="col">
                <button type="submit" class="btn_color" style="width:100%; margin:10px;">จ้างช่างภาพ</button>
            </div>
            <div class="col">
                <button type="submit" class="btn_color" style="background: #fff; color:#72AFD3; border:1px solid #72AFD3; width:100%; margin:10px;">ติดต่อสอบถาม</button>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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
    });
  </script>
</body>
</html>