<?php
require './PHPMailer/PHPMailerAutoload.php';
 
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "ppp01231@gmail.com";
$mail->Password = "0930960418";
$mail->SetFrom("ppp01231@gmail.com");
$mail->Subject = "ID check mail";


?>