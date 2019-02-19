<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create package</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
</head>
<body>
<form action="createPackageCard/store" method="post">
{{ csrf_field() }}

    <!-- {{URL::previous()}} -->
    <section style="height:60px; padding:20px;">  
            <div class="row">
                <div class="col-1">
                    <button onclick="window.location.href='{{ URL::previous() }}'" class="btn" style="background:#fff;"><</button> 
                </div>
                <div class="col-6">
                    <h3 class="headder_text" style="padding: 5px;">สร้างการ์ดค่าบริการ</h3>
                </div>
                <div class="col">
                {!! Form::submit('สร้าง',['class' => 'btn_color btn_color_bar']) !!}                
                </div>
            </div>
            
    </section>

    <div class="container">
    <div class="row">
            <div class="container wrap_container_head">
                <div class="row">
                    <div class="col">
                            <h3 class="headder_text">ค่าบริการถ่าย{{$head_category}}</h3>
                    </div>
                </div>
            </div> 
            <div class="col-md">
                <span class="all_more_link">รูปแบบงาน</span>
                <div class="form-group">
                {!! Form::select('id_formattime',['1' => 'ครึ่งวัน', '2' => 'เต็มวัน', '3' => 'รายชั่วโมง'],null,['class'=>'form-control select_search'],['placeholder' => 'เลือกรูปแบบงาน...']) !!}
                </div>
            </div>
            <div class="col-md">
                <span class="all_more_link">ราคา</span>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            {!! Form::number('price', null, ['class'=>'form-control']) !!} 
                        <div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <span class="all_more_link">สิ่งที่ลูกค้าจะได้รับ</span>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            {!! Form::textarea('detail',null,['class'=>'form-control textarea_edit']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <span class="all_more_link">การจัดส่ง</span>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            {{ Form::radio('shipping', 1) }} Yes
                            {{ Form::radio('shipping', 0) }} No
                        <div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <span class="all_more_link">ค่าจัดส่ง</span>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            {!! Form::number('shipping_cost',null,['class'=>'form-control']) !!}
                        <div>
                    </div>
                </div>
            </div>
            <div class="form-group">
            <input type="hidden" name="id_category" value="{{$package_card->id_category}}">
            </div>

        </div>
    </div>

</form>

</body>
</html>