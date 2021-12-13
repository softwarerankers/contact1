<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['mesage'];

$formcontent = "From: $name \n Message: $message";
$mailTo = "fakeds983@gmail.com";
$subject = "Contact Form Submission";
$mailheader = "From: $email \r\n";
mail($mailTo,$subject,$formcontent,$mailheader) or die ("Error !");
echo "Thank You !";
?>