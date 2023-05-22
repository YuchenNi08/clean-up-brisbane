<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'yni0@eq.edu.au'; // Replace with your designated email address
  $subject = 'New Message from Contact Form';
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    header('Location: message_sent.html');
    exit();
  } else {
    echo 'Sorry, an error occurred while sending your message.';
  }
}
?>
