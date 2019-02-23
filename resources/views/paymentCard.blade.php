<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
</head>  
<body>
    <section class="text_right" style="height:60px; padding:20px;">    
        <a style="cursor:pointer; color:#aeaeae;"  onclick="window.location.href='/listpayment'"><i class="fas fa-times-circle"></i></a>
    </section>

    <div class="container">
      <div class="row" id="payment">
        <form name="checkoutForm" method="POST" action="/checkout">
          <script type="text/javascript" src="https://cdn.omise.co/omise.js"
            data-key="pkey_test_5e3gl9x2200jvt571vo"
            data-image="{{url('assets/image/logo.png')}}"
            data-frame-label="ชำระเงิน"
            data-button-label="ชำระเงิน"
            data-submit-label="Submit"
            data-location="no"
            data-amount="490000"
            data-currency="thb"
            >
          </script>
          <!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
        </form>
        <!-- data-key="pkey_test_5e3gl9x2200jvt571vo" -->
      </div>
    </div>


</body>
</html>