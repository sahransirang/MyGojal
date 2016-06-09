<?php

$to = $_POST['to'];
$from = $_POST['from'];

$header = "from: $from";
$subject = $_POST['subject'];
$body = $_POST['body'];

mail($to,$subject,$body,$header);

echo "Email sent";


?>
