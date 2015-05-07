@extends('app')

@section('content')
<?php 
	
	$amount = Cart::total() . '00';
	$value = str_replace('.', '', $amount);
    $description = "";

    foreach (Cart::content() as $product){
        $description = $description . 'Product: ' . $product->name . ' Storlek: ' . $product->options->size . ' Antal: ' . $product->qty . ' : ';
    }
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
         'iframeheight': "800",
         'iframewidth': "600",
         'description': "{!! $description !!}",
         'accepturl': "http://homestead.app/confirm",
         'callbackurl': "http://homestead.app/confirm"
     });
     paymentwindow.append('payment-div');
     paymentwindow.open();
 </script>
 @endsection