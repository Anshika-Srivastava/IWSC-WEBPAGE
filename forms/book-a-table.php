<?php
  $name = $_POST['about'];
  $visitor_email = $_POST['email'];
  $domain = $_POST['domain'];
  $message = $_POST['message'];

  $email_from = 'IncetiptionWave.com';
  $email_subject = "New Form Submission";
  $email_body = "User Name : $name.\n".
                  "User Email : $visitor_email.\n".
                    "Domain : $domain.\n".
                      "User Message : $message.\n";

  $to = "abcd@gmail.com";
  $headers = "From : $email_from \r\n";
  $headers .= "Replyy-To : $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location :index.html");
?>
