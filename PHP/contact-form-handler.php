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




?>