<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Step 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 

</head>
<body>

<section style="height:60px; padding:20px;">    
        <button class="btn_layout_back" onclick="window.location.href='/profile_photographer'">กลับ</button> 
    </section>

    <div class="container">

        <span class="all_more_link">ประเภทงาน</span>

        <div class="row">
            <div class="col">
                <label class="container_radio">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                        รับปริญญา
                    </div>
                    <div class="col text_right">
                        <span class="listtag_head">เริ่มต้นที่</span>
                        <h3  class="listtag_price">600 ฿</h3>
                    </div>
                </div>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
                </label>

                <label class="container_radio">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    ภาพบุคคล/แฟชั่น
                    </div>
                    <div class="col text_right">
                        <span class="listtag_head">เริ่มต้นที่</span>
                        <h3  class="listtag_price">600 ฿</h3>
                    </div>
                </div>
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
                </label>

                                <label class="container_radio">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    งานแต่งงาน
                    </div>
                    <div class="col text_right">
                        <span class="listtag_head">เริ่มต้นที่</span>
                        <h3  class="listtag_price">3,000 ฿</h3>
                    </div>
                </div>
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
                </label>

                <label class="container_radio">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    พรีเวดดิ้ง
                    </div>
                    <div class="col text_right">
                        <span class="listtag_head">เริ่มต้นที่</span>
                        <h3  class="listtag_price">900 ฿</h3>
                    </div>
                </div>
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
                </label>

                                <label class="container_radio">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    งานอีเวนต์
                    </div>
                    <div class="col text_right">
                        <span class="listtag_head">เริ่มต้นที่</span>
                        <h3  class="listtag_price">900 ฿</h3>
                    </div>
                </div>
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
                </label>

                <label class="container_radio">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    สถาปัตยกรรม
                    </div>
                    <div class="col text_right">
                        <span class="listtag_head">เริ่มต้นที่</span>
                        <h3  class="listtag_price">900 ฿</h3>
                    </div>
                </div>
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
                </label>

                <label class="container_radio">
                <div class="row">
                    <div class="col" style="padding-top: 10px;">
                    สินค้า/อาหาร
                    </div>
                    <div class="col text_right">
                        <span class="listtag_head">เริ่มต้นที่</span>
                        <h3 class="listtag_price">900 ฿</h3>
                    </div>
                </div>
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
                </label>

            </div>
        </div>
        <nav class="container nav_bottom nav_bottom">
        <div class="row">
            <div class="col">
                <button type="submit" onclick="window.location.href='/listPackage'" class="btn_color btn_bottom">ต่อไป</button>
            </div>
        </div>
        </nav>

    </div>

</body>
</html>