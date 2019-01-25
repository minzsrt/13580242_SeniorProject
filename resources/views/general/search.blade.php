@extends('layouts.mainmenu_general')
@section('page_title', 'Search')
@section('content')

    <div class="container col-11 wrap_container_search">
        
        <div class="row">
            <div class="col">
                <h3 class="headder_text text_center">ช่างภาพฝีมือดีกำลังรอคุณอยู่</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">ประเภทงาน</span>
                <select class="select_search" style="">
                    <option selected>เลือกประเภทงาน...</option>
                    <option value="1">รับปริญญา</option>
                    <option value="2">ภาพบุคคล/แฟชั่น</option>
                    <option value="3">งานแต่งงาน</option>
                    <option value="1">พรีเวดดิ้ง</option>
                    <option value="2">งานอีเวนต์</option>
                    <option value="3">สถาปัตยกรรม</option>
                    <option value="3">สินค้า/อาหาร</option>
                </select>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">งบประมาณ (บาท)</span>
                <div class="row">
                    <div class="col">
                        <input type="number" placeholder="0" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                    </div>
                    <span>-</span>
                    <div class="col">
                        <input type="number" placeholder="1500" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                    </div>
                </div>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">วันที่</span>
                <input type="date" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
            </div>
            <div class="col-md" style="margin-top:10px; font-size:14px;">
                <span class="all_more_link">เวลา</span>
                <div class="row">
                    <div class="col">
                        <button class="btn_layout">ครึ่งวัน</button>
                    </div>
                    <div class="col">
                        <button class="btn_layout">เต็มวัน</button>
                    </div>
                    <div class="col">
                        <button class="btn_layout_select">รายชั่วโมง</button>
                    </div>
                </div>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">สถานที่</span>
                <select class="select_search" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                    <option selected>เลือกสถานที่...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <button class="btn_color" onclick="window.location.href='/searchResult'">Search</button>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

@stop
