 <?php


use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['fname']) && isset($_POST['email'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        //Import PHPMailer classes into the global namespace
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        //Instantiation
        $mail = new PHPMailer();

        // smtp settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "ssembatyafred444@gmail.com";
        $mail->Password = 'SCHOOL50';
        $mail->Port=465;
        $mail->SMTPSecure="ssl"

        // Recipients email settings
        $mail->isHTML(true);
        $mail->setFrom($email, $fname);
        $mail->addAddress("makulajosh@gmail.com"); //Set who the message is to be sent to
        $mail->Subject = ("$email ($subject)");
        $mail->Body = $message;

        if($mail->send()){
            $status = "success";
            $response = "Email is sent";
        }
        else
        {
            $status = "failed";
            $response = "Something is wrong: <br>" .$mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));

    }

?> 
