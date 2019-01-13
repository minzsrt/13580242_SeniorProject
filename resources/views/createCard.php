<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Album</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
</head>
<body>

    <section style="height:60px; padding:20px;">  
            <div class="row">
                <div class="col-1">
                    <button class="btn" style="background:#fff;"><</button> 
                </div>
                <div class="col-6">
                    <h3 class="headder_text" style="padding: 5px;">สร้างการ์ดค่าบริการ</h3>
                </div>
                <div class="col">
                <button type="submit" class="btn_color" onclick="window.location.href='listPackage'" style="background:#72AFD3; width:100%; margin:0;">สร้าง</button>
                </div>
            </div>
            
    </section>

    <div class="container">
    <div class="card" style="margin:10px auto; padding: 0; border-radius: 10px; border:0; box-shadow: 0px 5px 8px rgba(0,0,0,0.1);">
            <div style="width:100%; height:auto; overflow: hidden; position:relative; border-radius: 10px;">
                <img class="card-img-top" src="assets/image/img_show03.jpg">    
            </div>
    </div>
    <div class="row">
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">รูปแบบงาน</span>
                <select class="select_search" style="">
                    <option selected>เลือกรูปแบบงาน...</option>
                    <option value="1">รายชั่วโมง</option>
                    <option value="2">ครึ่งวัน</option>
                    <option value="3">เต็มวัน</option>
                </select>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">ราคา</span>
                <div class="row">
                    <div class="col">
                        <input type="text" style="width:100%; height:40px; border-radius: 10px; border: 1px solid #ccc;">
                    </div>
                </div>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span class="all_more_link">สิ่งที่ลูกค้าจะได้รับ</span>
                <div class="row">
                    <div class="col">
                        <textarea style="width:100%; height:80px; border-radius: 10px; border: 1px solid #ccc;">
                        </textarea>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>