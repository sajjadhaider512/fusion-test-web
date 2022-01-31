<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$carModel = $_POST['carModel'];
$carNum = $_POST['carNum'];
$Date = $_POST['Date'];
$selectService = $_POST['select-service'];
$inputAddress = $_POST['inputAddress'];
$message = $_POST['message'];
$formcontent="User Name: $name \n Phone: $phone \n carModel: $carModel \n carNum: $carNum \n Date: $Date \n selectService: $selectService \n inputAddress: $inputAddress \n message: $message";
$recipient = "alee.hayder512@gmail.com";
$subject = "New Appointment Booking";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
header("Location: index.html");


?>
