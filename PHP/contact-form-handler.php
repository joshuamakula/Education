<?php
$errors='';
$myemail ='makulajosh@gmail.com';

if(empty($_POST['fname'])  || 
   empty($_POST['lname']) || 
   empty($_POST['email']) || 
   empty($_POST['subject']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$fname = $_POST['fname']; 
$lname = $_POST['lname']; 
$subject = $_POST['subject']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

// Email form data
if( empty($errors))

{

$to = $myemail;

$email_subject = $subject;

$email_body = "You have received a new message. ".

    " Here are the details:\n Name: $fname $lname\n ".

    "Email: $email_address\n Message \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

// header('Location: ../contact-form-thank-you.html');

header('location: ../contact.php?status=success');
if( $_GET['status'] == 'success'):
    echo 'Your message has been sent successfully';
endif;

}

?>