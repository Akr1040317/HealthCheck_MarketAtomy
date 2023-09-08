<?php

$to = 'akshatrastogi03@outlook.com';

$subject = 'testing';


$message = '<h1>hi there</h1>';

$headers = "From: testingtesting <marketathealth@healthcheck.marketatomy.com>\r\n";
$headers .= "Reply-To: marketathealth@healthcheck.marketatomy.com\r\n";
$headers .= "Content-type: text/html\r\n";

mail($to, $subject, $message, $headers);