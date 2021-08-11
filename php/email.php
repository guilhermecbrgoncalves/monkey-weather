<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'testing.goncalves@gmail.com';                     //SMTP username
    $mail->Password   = '.testing123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST['form-email'], $_POST['form-name']);
    $mail->addAddress('testing.goncalves@gmail.com', 'Recipient');     //Add a recipient
    
    //Content
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['form-subject'];
    $mail->Body    = '<p><b>Email from <a href="#">the monkey weather</a> contact form.</b></p>
    <p><b>From:</b> '.$_POST['form-name'] . ' ('.$_POST['form-email']. ')</p>
    <p><b>Message:</b> </p>
    <p>'. $_POST['form-message'] . '</p>';

    $mail->send();
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    header('Location: ../index.php?p=index&e=sent');

} catch (Exception $e) {
    header('Location: ../index.php?p=index&e=error');
}
