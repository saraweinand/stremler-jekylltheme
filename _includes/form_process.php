<?php
//define variables
$name = $POST_['name'];
$phone = $POST_['phone'];
$email = $POST_['email'];
$message = $POST_['message'];
$to = "saraweinand@gmail.com";
$subject = "New Message from Website"

mail ($to, $subject, $message, "from" . $name);
echo "your message has been sent!";

?>
