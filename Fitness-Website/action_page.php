<?php

if (isset($_POST['submit'])) {
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $mailFrom = $_POST['emailaddress'];
  $message = $_POST['subject'];

$mailTo = "fionamitchelldesign@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have recieved a personal training request from ".$fname.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.html?mailsent");

}
