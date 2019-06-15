<!DOCTYPE html>
<html>
<head>
<title>ใบเสนอราคา (สำเนา)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<style>
body{
    font-family:'garuda';
}
.head_bg{
    width:100%;
    height:40px;
    background:#72AFD3;    
}
.head{
    color:#ffffff;
    font-size: 28px;
    font-weight: bold;
}
table{
    width:100%;
    vertical-align: top;
    font-size: 18px;
    text-align:left;
}
.table{
    margin-top:40px;
}
.table tr,.table td{
    border-bottom: 1px solid #aeaeae;
    padding:10px;
}
.head-table{
    width:100%;
    background:#72AFD3; 
    color:#ffffff;
    font-size: 28px;
}
.colorwhite{
    color:#ffffff;
}
</style>
<body>
<div class="container">

    <table class="table">
    <thead >
        <tr class="head-table">
        <td class="colorwhite head">ใบเสนอราคา ออเดอร์ #{{$order->id}} (สำเนา)</td>
        </tr>
    </thead>
    </table>

    <p style="text-align:right; font-weight: bold;">วันที่ : {{ date("Y/m/d") }} </p>

    <table>
        <tbody>
            <tr>
                <td style="width:60%; font-weight: bold; font-size:18px;">
                {{$photographer->name}}
                </td>

                <td>
                <label>ผู้ว่าจ้าง</label><br>
                </td>
            </tr>
            <tr>
                <td>
                <label>เลขที่ประจำตัวบัตรประชาชน : {{$photographer->idcard}}</label><br>
                
                </td>
                <td style="font-weight: bold; font-size:18px;">
                {{$order->employer->username}}
                </td>
            </tr>
            <tr>
            
            </tr>
            <tr>
                <td>
                <label>ที่อยู่ : {{$photographer->address.' '.$photographer->sub_district.' '.$photographer->district.' '.$photographer->province.' '.$photographer->zipcode}}</label>
                </td>
                <td>
                <p>{{$order->employer->email}}</p>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table">
    <thead >
        <tr class="head-table">
        <td class="colorwhite">รายการ</td>
        <td class="colorwhite">ราคา</td>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>{{$order->category->name_category.' '.$order->formattime->name_format_time}}</td>
        <td>{{number_format($order->price)}}</td>
        </tr>
        <tr>
        <td>ค่าเดินทาง</td>
        <td>{{number_format($order->transportation_cost)}}</td>
        </tr>
        <tr>
        
        <td style="text-align:right; font-weight: bold;">รวม</td>
        <td style="font-weight: bold;">{{number_format($order->total)}}</td>
        </tr>
    </tbody>
    </table>

    <h3>สิ่งที่ผู้ว่าจ้างได้รับ</h3>
    <p>
    {{$order->detail}}
    </p>

    <table style="text-align: center;">
        <tbody>
            <tr>
                <td style="width:50%; vertical-align: middle;">
                ลงชื่อ<br>
                {{$photographer->name}}<br>
                ( {{$photographer->name}} )
                </td>

                <td>
                ผู้ว่าจ้าง<br><br>
                <hr style="width:50%;">
                วันที่ ____/____/____
                </td>
            </tr>
        </tbody>
    </table>

    
    <table style="margin-top:40px; border: 1px solid #aeaeae; ">
        <tbody>
            <tr>
                <td>
                *หมายเหตุ
                </td>

            </tr>
            <tr>
            <td>
                เอกสารฉบับนี้ findpho.co ออกให้กับช่างภาพโดยอัตโนมัติ
                </td>
            </tr>
        </tbody>
    </table>

</div>
</body>
</html>