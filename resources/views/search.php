<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 

</head>
<body>

    <nav>
        <div class="container" style="height:100%;">
            <div class="row" style="height:100%;">
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/index'">
                    <img class="menu_list" src="assets/image/home-button.svg">
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/search'">
                    <img class="menu_list_active" src="assets/image/circle.svg">
                    <img class="menu_list" src="assets/image/search.svg">
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/chatchannel'">
                    <img class="menu_list" src="assets/image/speech-bubbles.svg" >
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/notification'">
                    <img class="menu_list" src="assets/image/notification.svg" >
                </button>
                </div>
                <div class="col">
                <button class="btn_menu_list" onclick="window.location.href='/profileEmpoyer'">
                    <img class="menu_list" src="assets/image/friend.svg" >
                </button>
                </div>
            </div>
        </div>
    </nav>

    <section style="height:60px;"></section>

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
            <div class="col-md" style="margin-top:10px;">
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
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>