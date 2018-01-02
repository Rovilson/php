<?php
  $name = $_POST['firstname'] . ' ' . $_POST['lastname'];

  $to = 'vithal@localhost';
  $subject = 'Aliens Abducted Me - Abduction Report';
  $msg = "$name was abducted.\n";
  mail($to, $subject, $msg, 'From: das@couve.com');

  echo 'Thanks for submitting the form.<br />';
  echo 'Your name is ' . $name;
?>
