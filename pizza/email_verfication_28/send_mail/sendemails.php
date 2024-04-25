<?php
$to_email = "vidyesh.dhande21@pccoepune.org";
$subject = "did u get mail? reply me fast. vidyeshhhhhhhhhhhhhh";
$body = "Hi, This is useless person sending you mail";
$headers = "From: shruti.baravkar21@pccoepune.org";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email 👍";
} else {
    echo "Email sending failed...";
}