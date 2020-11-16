<?php
error_log("just here");
require_once ('./config/dbconnect.php');
require_once ('mail.php');
//add the db call here
if ((strtoupper($_SERVER['REQUEST_METHOD']) != 'POST' ) || !array_key_exists('HTTP_X_PAYSTACK_SIGNATURE', $_SERVER) ) {
    // only a post with paystack signature header gets our attention
    exit();
}
// Retrieve the request's body
$input = @file_get_contents("php://input");
define('PAYSTACK_SECRET_KEY','sk_live_9335950e6b799a2ac373bb91a7587786ebc9c3a1');
if(!$_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] || ($_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] !== hash_hmac('sha512', $input, PAYSTACK_SECRET_KEY))){
  // silently forget this ever happened
  exit();
}
http_response_code(200);
// parse event (which is json string) as object
// Do something - that will not take long - with $event



//loop and check which event is recieved and act accordingly
$event = json_decode($input);
switch($event->event){

    // subscription.create
    case 'subscription.create':

//this event is fired ONLY when a new subscription is initiated manually, NOT on autorenewal
//pick some parameters first to know the plan the person is subscribing for
 //$event = json_decode($input);
//$subscriptioncode=$event->data->subscription_code;
//$email=$event->data->customer->email;
//get the email token using curl



 
        break;
    // charge.success
    case 'charge.success':
 //generate accessno 
$accessno= uniqid();


$event = json_decode($input);
$email=$event->data->customer->email;
$username=$event->data->metadata->username;


mysqli_query($con,"insert into users(email,username,accessno) values ('$email','$username','$accessno') ");

sendMail($email,$username,$accessno);

     
        break;
    // subscription.disable
    case 'subscription.disable':
         error_log("subscription disabled"); 
//do sth when subscription is disabled
        break;
    // invoice.create and invoice.update
    case 'invoice.create':
         error_log("invoice was created"); 
    case 'invoice.update':
        break;
}

//http_response_code(200);
exit();
?>