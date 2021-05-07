<?php
use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['fname']) && isset($_POST['lname'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        //Import PHPMailer classes into the global namespace
        require_once "PHPMailer/PHPMailer/PHPMailer";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception";

        //Instantiation
        $mail = new PHPMailer();

        // smtp settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "ssembatyafred444@gmail.com";
        $mail->Password = 'SCHOOL50';
        $mail->Port="456";
        $mail->SMTPSecure="ssl"

    }


?>