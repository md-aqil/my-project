<?php

$msg = 'Name: ' . $_POST['name'] . "\n\r";
$msg .= 'Mobile: ' . $_POST['mobile'] . "\n\r";
$msg .= 'Message: ' . $_POST['message'] . "\n\r";

$headers = "From: aqilali381@gmail.com" . "\r\n";

mail('aqilali381@gmail.com', 'Some subject', $msg, $header);

header("LOCATION: " . $_SERVER['HTTP_REFERER']);
