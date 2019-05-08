<?php

if(isset($_Post['submit'])){
  $name=$_Post['name'];
  $subject=$_Post['subject'];
  $mailFrom=$_Post['message'];
  $msg=$_Post['message'];

  $mailTo = "dylanfairbanks@icloud.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received a message from ".$name.".\n\n".$msg;


  mail($mailTo,$subject,$txt,$headers,$mailFrom);
  header("Location: index.php?mailsend");

}
?>
