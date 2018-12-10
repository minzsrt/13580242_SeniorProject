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
    <style>
    body{
        font-family: 'Prompt', Regular;
    }
    .checked {
        color: orange;
    }
    select.select_search {
        height:35px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        
    }
    select.minimal:focus {

    }
</style>
</head>
<body>

    <nav style="width:100%; height:60px; background-color:#ffffff; box-shadow: 0px 5px 8px rgba(0,0,0,0.1); text-align:center;">
        <div class="container" style="height:100%;">
            <div class="row" style="height:100%;">
                <div class="col">
                <button style="width:100%; height:100%; border:0; background-color:#ffffff; position:relative;" onclick="window.location.href='/'">
                    <img src="assets/image/home-button.svg" style="position: absolute;top: 15px;margin-left: auto;margin-right: auto;left: 0;right: 0;" height="30">
                </button>
                </div>
                <div class="col">
                <button style="width:100%; height:100%; border:0; background-color:#ffffff; position:relative;" onclick="window.location.href='/'">
                    <img src="assets/image/circle.svg" style="position: absolute;top: 20px;left: 20px;" height="30">
                    <img src="assets/image/home-button.svg" style="position: absolute;top: 15px;margin-left: auto;margin-right: auto;left: 0;right: 0;" height="30">
                </button>
                </div>
                <div class="col">
                <button style="width:100%; height:100%; border:0; background-color:#ffffff; position:relative;" onclick="window.location.href='/'">
                    <img src="assets/image/home-button.svg" style="position: absolute;top: 15px;margin-left: auto;margin-right: auto;left: 0;right: 0;" height="30">
                </button>
                </div>
                <div class="col">
                <button style="width:100%; height:100%; border:0; background-color:#ffffff; position:relative;" onclick="window.location.href='/'">
                    <img src="assets/image/home-button.svg" style="position: absolute;top: 15px;margin-left: auto;margin-right: auto;left: 0;right: 0;" height="30">
                </button>
                </div>
                <div class="col">
                <button style="width:100%; height:100%; border:0; background-color:#ffffff; position:relative;" onclick="window.location.href='/'">
                    <img src="assets/image/home-button.svg" style="position: absolute;top: 15px;margin-left: auto;margin-right: auto;left: 0;right: 0;" height="30">
                </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="margin: 20px 0 0 !important;">
        <div class="row">
            <div class="col-md" style="margin-top:10px;">
                <span style="color:#AEAEAE; font-size:12px;">ประเภทงาน</span>
                <select class="select_search" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                    <option selected>เลือกประเภทงาน...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span style="color:#AEAEAE; font-size:12px;">งบประมาณ (บาท)</span>
                <div class="row">
                    <div class="col">
                        <input type="number" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                    </div>
                    <span>-</span>
                    <div class="col">
                        <input type="number" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                    </div>
                </div>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span style="color:#AEAEAE; font-size:12px;">เวลา</span>
                <div class="row">
                    <div class="col">
                        <button>1</button>
                    </div>
                    <div class="col">
                        <button>2</button>
                    </div>
                    <div class="col">
                        <button>3</button>
                    </div>
                </div>
            </div>
            <div class="col-md" style="margin-top:10px;">
                <span style="color:#AEAEAE; font-size:12px;">สถานที่</span>
                <select class="select_search" style="width:100%; border-bottom: 1px solid #ccc; border-top:0; border-left:0; border-right:0;">
                    <option selected>เลือกสถานที่...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <button>Search</button>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>