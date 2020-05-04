<?php
  
    require __DIR__  . '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("APP_USR-6969930077096427-050402-d9e3527d1c61c94f0078e217b88a0508-27149370");

    $payment = new MercadoPago\Payment();

    $payment->transaction_amount = 141;
    $payment->token = "YOUR_CARD_TOKEN";
    $payment->description = "Ergonomic Silk Shirt";
    $payment->installments = 1;
    $payment->payment_method_id = "visa";
    $payment->payer = array(
      "email" => "larue.nienow@hotmail.com"
    );

    echo $payment->status;
