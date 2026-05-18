<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["confirm"]))
{
require_once("PHPMailer.php");
require_once("SMTP.php");
require_once("Exception.php");
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$fname=$_POST["fname"];
$phno=$_POST["phno"];
$email=$_POST["email"];
$specs=$_POST["specialization"];
$doc=$_POST["doctor"];
try {
    //Server settings
    $mail->SMTPDebug = TRUE;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'avstory01@gmail.com';                     //SMTP username
    $mail->Password   = 'ujmc velr amui copx';                               //SMTP password
    $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST["email"], 'Admin');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Appointment Booking';
    $mail->Body    = "I Want Appointment For $fname for $specs by Doctor $doc 
    so please book my Appointment!";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>alert("Message Sent");</script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>