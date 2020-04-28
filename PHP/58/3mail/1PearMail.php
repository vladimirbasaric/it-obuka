<?php
require 'Mail.php';
$to = 'petarpetrovic@example.com';
$headers['From'] = 'markomarkovic@example.com';
$headers['Subject'] = 'New Version of PHP Released!';
$body = 'Go to http://www.php.net and download it today!';
$message =& Mail::factory('mail');
$message->send($to, $headers, $body);
?>

