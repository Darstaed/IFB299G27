<?php
// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");
ini_set( "SMTP", "172.16.1.3" );
ini_set( "smtp_port", 25 );
// Send
mail('matt.dbker@gmail.com', 'My Subject', $message);
?>