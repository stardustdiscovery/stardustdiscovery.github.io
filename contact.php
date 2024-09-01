<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Validate and store the data in a database or send via email
  // For example, send an email using PHP's mail() function:
  $to = 'ibik.adaeze@gmail.com';
  $subject = 'Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  mail($to, $subject, $body);
?>