<?php

$user_name = $_POST['name'];
$user_phone = $_POST['phone'];
$user_email = $_POST['email'];
$user_carModel = $_POST['carModel'];
$user_carNum = $_POST['carNum'];
$Date = $_POST['Date'];
$user_selectService = $_POST['select-service'];
$user_inputAddress = $_POST['inputAddress'];
$user_message = $_POST['message'];

$email_from = 'appointment@fusionautconcept.ae';
$subject = "New Appointment Booking";

$email_body ="User Name: $user_name.\n".
              "Phone: $user_phone.\n".
              "Email: $user_email.\n".
              "carModel: $user_carModel.\n".
              "carNum: $user_carNum.\n".
              "Date: $Date.\n".
              "selectService: $user_selectService.\n".
              "inputAddress: $user_inputAddress.\n".
              "message: $user_message.\n";
$to = "alee.hayder512@gmail.com";

$mailheader = "From: $email_from \r\n";
$mailheader .= "Reply-To: $user_email \r\n";

mail($to,$subject,$email_body,$mailheader);
header("Location: index.html");


?>
