<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>  
<body>
<form name="checkoutForm" method="POST" action="/checkout">
  <script type="text/javascript" src="https://cdn.omise.co/omise.js"
    data-key="pkey_test_5e3gl9x2200jvt571vo"
    data-image="{{url('assets/image/logo.png')}}"
    data-frame-label="ชำระเงิน"
    data-button-label="Pay now"
    data-submit-label="Submit"
    data-location="no"
    data-amount="10025"
    data-currency="thb"
    >
  </script>
  <!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
</form>
<!-- data-key="pkey_test_5e3gl9x2200jvt571vo" -->
</body>
</html>