<?php
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"]; 
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text == "") {
    $response = "CON what do you want to check \n";
    $response .= "1. My Account No \n";
    $response .= "2. My Phone Number";
} else if ($text == "1") {
    $response = "CON Choose the account information you want to view \n";
    $response .= "1. Account Number \n";
    $response .= "2. Account Balance";
} else if($text == "2") {
    $response = "END your phone number is ".$phoneNumber;
} else if ($text == "1*1") {
    $accountNumber = "ACC1001";
    $response = "END Your account number is ".$accountNumber;
} else if($text == "1*2") {
    $accountbalance = "#10, 000";
    $response = "END Your account balance is ".$accountbalance;
}
header('content-type: text/plain');
echo $response;

?>