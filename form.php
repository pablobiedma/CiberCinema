<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) isset($_POST['f']) ){
  $n = $_POST['n']; // HINT: use preg_replace() to filter the data
  $e = $_POST['e'];
  $m = nl2br($_POST['m']);
  $e = $_POST['f'];
  $to = "pablobie00@gmail.com"; 
  $from = $e;
  $subject = 'Contact Form Message';
  $message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.'<br><b>Phone:</b> '.$f.' <p>'.$m.'</p>';
  $headers = "From: $from\n";
  $headers .= "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  if( mail($to, $subject, $message, $headers) ){
    echo "success";
  } else {
    echo "The server failed to send the message. Please try again later.";
  }
}
?>