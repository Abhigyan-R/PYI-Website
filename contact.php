<?php
//get data from form  
$name = $_POST['name'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$service= $_POST['service'];
$message= $_POST['msg'];
$to = "office@pyitechnologies.com";
$subject = "Contact Form Submission";
$txt ="Name = ". $name . "\r\n  Mobile = " . $mobile . "\r\n Email = " . $email . "\r\n Service = " . $service . "\r\n Message =" . $message;
$headers = "From: noreply@pyitechnologies.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>