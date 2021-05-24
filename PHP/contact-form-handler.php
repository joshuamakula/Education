<?php
//get data from form  

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "makulajosh@mail.com";
$subject = "Mail From Education";
$txt ="Name = ". $fname . 
        "\r\n  lname = " . $lname . 
        "\r\n  Email = " . $email . 
        "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>