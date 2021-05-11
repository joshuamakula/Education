 <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'makulajosh@gmail.com'; // YOUR gmail email
    $mail->Password = 'makukula'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom($email, $fname);
    $mail->addAddress('makulajosh@gmail.com', 'Receiver Name');
    $mail->addReplyTo($email, $fname); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    // $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}



// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

//     if(isset($_POST['fname']) && isset($_POST['email'])){
//         $fname = $_POST['fname'];
//         $lname = $_POST['lname'];
//         $email = $_POST['email'];
//         $subject = $_POST['subject'];
//         $message = $_POST['message'];

//         //Import PHPMailer classes into the global namespace
//         require_once "PHPMailer/PHPMailer.php";
//         require_once "PHPMailer/SMTP.php";
//         require_once "PHPMailer/Exception.php";

//         //Instantiation
//         $mail = new PHPMailer();

//         // smtp settings
//         $mail->SMTPDebug = SMTP::DEBUG_SERVER;
//         $mail->isSMTP();
//         $mail->Host = "smtp.gmail.com";
//         $mail->SMTPAuth = true;
//         $mail->Username = "ssembatyafred444@gmail.com";
//         $mail->Password = 'SCHOOL50';
//         $mail->Port="465";
//         $mail->SMTPSecure="ssl"

//         // Recipients email settings
//         $mail->isHTML(true);
//         $mail->setFrom($email, $fname);
//         $mail->addAddress("makulajosh@gmail.com"); //Set who the message is to be sent to
//         $mail->Subject = ("$email ($subject)");
//         $mail->Body = $message;

//         if($mail->send()){
//             $status = "success";
//             $response = "Email is sent";
//         }
//         else
//         {
//             $status = "failed";
//             $response = "Something is wrong: <br>" .$mail->ErrorInfo;
//         }

//         exit(json_encode(array("status" => $status, "response" => $response)));

//     }


?> 
