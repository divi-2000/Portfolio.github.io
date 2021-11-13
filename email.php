<?php

$to="komalhabura2@gmail.com";
$subject="Test Mail";
$message="welcome to new world";
$from = "komalhabura5@gmail.com";
$headers="From : $from";
if(mail($to,$subject,$message,$headers)){
    echo "Mail sent";
}else{
    echo "failed to send";
}



?>