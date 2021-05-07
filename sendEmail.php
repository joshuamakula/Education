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

        // email settings
        $mail->isHTML(true);
        $mail->setFrom($email, $fname, $lname);
        $mail->addAddress("makulajosh@gmail.com");
        $mail->Subject = ("$email ($subject)");
        $mail->Body = $message;

        if($mail->send()){
            $status = "success";
            $response = "Thank you for contacting us! We'll get back to you soon";
        }
        else
        {
            $status = "failed";
            $response = "Something is wrong: <br>" .$mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));

    }


?>