<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recommend Setting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 

</head>
<body>

    <section style="height:60px; padding:20px;">    
        <button class="btn_layout_back" onclick="window.location.href='/index'">กลับ</button> 
    </section>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="headder_text">เลือกประเภทภาพของคุณ</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="container_checkbox">รับปริญญา
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
                </label>
                <label class="container_checkbox">ภาพบุคคล/แฟชั่น
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container_checkbox">งานแต่ง
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container_checkbox">พรีเวดดิ้ง
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container_checkbox">งานอีเวนต์
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container_checkbox">สถาปัตยกรรม
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container_checkbox">สินค้า/อาหาร
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <button type="submit" class="btn_color" style="background:#72AFD3; width:100%;">บันทึก</button>
            </div>
        </div>
    </div>

</body>
</html>