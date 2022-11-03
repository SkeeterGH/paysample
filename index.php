<?php

include_once './paystack/payment.php';

// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

//section 1 start

if ($text == "") {
      // This is the first request. Note how we start the response with CON
      $response  = "CON Main Menu \n";
      $response .= "1. Trensfer Money \n";
      $response .= "2. MoMoPay\n";

} else if ($text == "1") {
      $amount = 20;
      $provider = 'mtn';
      // call payment functionn here
    
} else if ($text == "2") {
      $amount = 20;
      $privider = 'mtn';
      // call transfer functionn here

}



// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
