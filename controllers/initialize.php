<?php
$curl = curl_init();

$email = "";
$amount = 200000;  //the amount in kobo. This value is actually NGN 300

// url to go to after payment
$callback_url = 'myapp.com/pay/callback.php';

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        'amount'=>$amount,
        'email'=>$email,
        'callback_url' => $callback_url
    ]),
    CURLOPT_HTTPHEADER => [
        "authorization: Bearer sk_test_0e30a39f85963904df8dc24ce2110a6e2061bd6b", //replace this with your own test key
        "content-type: application/json",
        "cache-control: no-cache"
    ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    // there was an error contacting the Paystack API
    die('Curl returned error: ' . $err);
}

$tranx = json_decode($response, true);

if(!$tranx['status']){
    // there was an error from the API
    print_r('API returned error: ' . $tranx['message']);
}

// comment out this line if you want to redirect the user to the payment page
print_r($tranx);
// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $tranx['data']['authorization_url']);
