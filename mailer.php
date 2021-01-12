<?php

$to   = "kpin463@gmail.com";
$from = 'kpin463@gmail.com';

$subject = "You Got Mail From TalkersCode"; 

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "CC: your_email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
$message = '<html><body>';
$message .= '<h1>Mail From TalkersCode - Thanks for Subscribing</h1>'; 
$message .= '<table width="100%"; style="border:1px solid grey;" cellpadding="15">';
$message .= "<tr><td>Home Page</td><td><a href='http://talkerscode.com'></a></td></tr>";
$message .= "<tr><td colspan=3>Dear Receiver_Name,</td><td>Thanks For Subscribing TalkersCode.com Now You can Access Much More And Premium Features.</td></tr>";
$message .= "</table>";
$message .= "</body></html>";
  
mail($to, $subject, $message, $headers);