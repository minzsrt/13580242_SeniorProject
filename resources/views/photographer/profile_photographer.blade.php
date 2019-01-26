@extends('layouts.mainmenu_p')
@section('page_title', 'Profile Photographer')
@section('content')

    <div class="wrap_container_head">
        <div class="row">
            <div class="col-3">
                <div class="img_profile">
                    <img src="assets/image/avatar05.jpg">   
                </div>
            </div>
            <div class="col" style="padding-top:20px;">
                <span>{{ Auth::user()->username }} ({{Auth::user()->role->name}})</span>
                <div class="username_profile">
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star"></i>        
                </div>        
            </div>
            <div class="col text_right" style="padding-top:20px;">
                <button class="btn_layout_back" data-toggle="modal" data-target="#exampleModalCenter">ตั้งค่า</button>
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
        <div class="tab-pane active container" id="menu1">

            <div class="card" style="border:0; margin:10px auto; ">
            <button class="btn btn_create" onclick="window.location.href='/createAlbum'">
                <i class="fas fa-plus-circle"></i>
            </button> 
            </div>
        @foreach($albums as $album)
            @if( Auth::user()->id === $album->id_user )
                <a href="{{ url("photographer/show/{$album->id}/edit/") }}">
                        <div class="card album_show_wrap">
                                <div class="album_show">
                                    <div class="album_show_detail_group">
                                        <div class="float_left">
                                            <span class="hastag_album">
                                                <!-- @foreach($categories as $category)
                                                    @if( $category->id === $album->id_category)
                                                    {{ $category->name_category }}
                                                    @endif
                                                @endforeach -->
                                                {{ $album->category->name_category }}
                                            </span>
                                            <h3 class="caption_album">
                                                {{ $album->name_album }}
                                                {{ $album->user->username }}
                                            </h3>
                                        </div>
                                        <div class="col text_right fav_count">
                                            <span>614 </span><img class="btn_fav" src="assets/image/heart_layout.svg">
                                        </div>
                                    </div>
                                    <img class="card-img-top" src="assets/image/img_show_020{{ $album->id }}.jpg">  
                                    <!-- <a href="{{ url('photographer/show', $album->id) }}">
                                        {{ $album->name_album }}
                                    </a>   -->
                                </div>
                        </div>
                </a>        
            @endif    
        @endforeach
            
        </div>

        <div class="tab-pane container" id="menu2">
            <div class="container wrap_container_head">
                <div class="row">
                    <div class="col">
                        <h3 class="headder_text">ค่าบริการ</h3>
                    </div>
                </div>
            </div>
            <div onclick="window.location.href='/listPackage'" class="packagecard_box">
                <div class="row packagecard_box_padding">
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
            <div onclick="window.location.href='/listPackage'" class="packagecard_box">
                <div class="row packagecard_box_padding">
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
            <div class="card" style="border:0; margin:10px auto; ">
                    <button onclick="window.location.href='/listPackage'" class="btn btn_create">
                        <i class="fas fa-plus-circle"></i>
                    </button> 
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
            <div class="card review_box">
                <div class="card-body review_box_head">
                    <div class="row">
                        <div class="col-2">
                            <div class="review_img_profile">
                                <img src="assets/image/avatar04.jpg">    
                            </div>
                        </div>
                        <div class="col-6 username_profile">
                            <div class="row">
                                <div class="col-12">
                                    <span class="review_username">Username</span>
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
                <div class="review_body">
                    <p>
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
                                <td class="active_employ_date">28</td>
                                <td class="active_employ_date">29</td>
                                <td class="active_employ_date">30</td>
                                <td class="active_employ_date">31</td>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">ตั้งค่า</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <a class="btn btn_color btn_layout_bottom" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                                            {{ __('ออกจากระบบ') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

@stop
