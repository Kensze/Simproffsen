@extends('app')

@section('content')
<?php 
	
	$amount = Cart::total() . '';
	$value = str_replace('.', '', $amount);
 ?>


<script charset="UTF-8" src="https://ssl.ditonlinebetalingssystem.dk/integration/ewindow/paymentwindow.js" type="text/javascript"></script>
 <div id="payment-div"></div>
 <script type="text/javascript">
     paymentwindow = new PaymentWindow({
         'merchantnumber': "8013507",
         'amount': "{!! $value !!}",
         'currency': "SEK",
         'windowstate': "4",
         'paymentcollection': "1",
         'iframeheight': "400",
         'iframewidth': "360",
         'accepturl': "http://homestead.app/confirm"
     });
     paymentwindow.append('payment-div');
     paymentwindow.open();
 </script>
 @endsection