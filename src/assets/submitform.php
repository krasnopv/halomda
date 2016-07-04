<?php 
  $to = 'info@halomda.com; krasnopv@gmail.com';
  $subject = 'Subject: Message from Halomda contact form'; 
  $firstname = $_POST['first_name'] ; 
  $surname = $_POST['last_name'] ;
  $email = $_POST['email'] ;
  $phone = $_POST['phone'] ;
  $text = $_POST['message'] ;

  $message = "From: $firstname $surname \nEmail: $email \nPhone: $phone \nMessage: $text \n";

  $sent = mail($to, $subject, $message);
  header('Location: ../contact.html');
?>