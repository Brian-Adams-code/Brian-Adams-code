<?php
  echo "<pre>";

  print_r($_POST);

  echo "</pre>";

  $userName= $_POST["firstName"];
  $userName= $_POST["lastName"];
  $userEmail= $_POST["email"];
  $message= $_POST["message"];

  $to="brianadem2@gmail.com"
  $body=""

  $body .="From: ".$userName. "\r\n";
  $body .="From: ".$userEmail. "\r\n";
  $body .="From: ".$message. "\r\n";

  mail($to,$message,$body);
echo "</pre>";
?>