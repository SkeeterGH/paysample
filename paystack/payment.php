<?php

include_once 'sms.php';
include_once 'conn.php';

class momo{

      function __costructor(){

      }

      public function makePayment($phoneNumber,$amount,$provider){

            echo "END Transaction Is Being Processed.\nPlease Wait For Payment Promte To Approve Payment.\nThank you!";

            
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/charge",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{
                  amount: 5,
                  email:' customer@email.com',
                  currency:' GHS',
                  mobile_money: {
                        phone : 054811633,
                        provider : 'mtn'
                  }
            }";
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer pk_live_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx",
            "Content-Type: application/json"
            ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
            echo "cURL Error #:" . $err;
            } else {
            echo $response;
            }

            
            

            
      
      }


      public function makeTransfer($phoneNumber,$Amount,$provider){

            echo "END Transaction Is Being Processed.\nPlease Wait For Payment Promte To Approve Payment.\nThank you!";

            

      
      }
}
