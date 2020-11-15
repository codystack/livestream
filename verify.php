<?php
//check if request was made with the right data
if(!$_SERVER['REQUEST_METHOD'] == 'POST' || !isset($_POST['reference'])){
    die("Transaction reference not found");
}

//set reference to a variable @ref
$reference = $_POST['reference'];

//The parameter after verify/ is the transaction reference to be verified
$url = 'https://api.paystack.co/transaction/verify/'.$reference;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
    $ch, CURLOPT_HTTPHEADER, [
        'pk_test_274c204e073e2b9d908430573ba1603a843c66d4']
);

//send request
$request = curl_exec($ch);
//close connection
curl_close($ch);
//declare an array that will contain the result
$result = array();

if ($request) {
    $result = json_decode($request, true);
}

if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {
    echo "success";
    //Perform necessary action
}else{
    echo "Transaction was unsuccessful";
}