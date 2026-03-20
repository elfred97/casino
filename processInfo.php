<?php
$name         = $_POST['name'];
$email        = $_POST['email'];
$address      = $_POST['address'];


  $headers = '';
  $headers .= "Reply-To: The Sender <".$email.">\r\n";
  $headers .= "Return-Path: The Sender <".$email.">\r\n";
  $headers .= "From: The Sender <".$email.">\r\n";

  $headers .= "Organization: Sender Organization\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

$to_email = "elfredtapar@gmail.com";
$subject = "PIM TOP Message";
$body = "Name: ".$name."\r\n".
        "Email: ".$email."\r\n".
        "Address: ".$address."\r\n";
        // "Message: ".$inquiry;
// $headers = "From: ".$email;

// mail("recipient@recipient.com", "Message", "A simple message.", $headers);

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>