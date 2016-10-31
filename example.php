<?php
$mail = new mail;

$mail->sender = "example@domain.com";//Server
$mail->nameSender = "Mailer";
$mail->recipient = "johnDream@gmail.com";//Client
$mail->object = "Hello World";
$mail->htmlMessage = "<h1>Hello World!</h1><p>Laurem Impsum</p>";

$mail->sendMail();