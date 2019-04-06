<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';




// // taking data form javascirpt

// $json = file_get_contents('php://input');

// // decoding the received JSON and store into $obj variable.
// $obj = json_decode($json,true);

// //Checking Email is already exist or not using SQL query.
// $mailto = $obj['mail_to'];
// $mailSub = $obj['mail_sub'];
// $mailMsg = $obj['mail_msg'];


$mailto = 'aaravonly4you@gmail.com';
$mailSub = "hi";
$mailMsg = "hi";

$Username = "javaaprimer123@gmail.com";
$Password = "java123help";



// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;      // Enable verbose debug output


                                     
    // $mail->isSMTP();                   //comment it if your are using godaday package
                             // Set mailer to use SMTP
    


    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication

   $mail ->SMTPSecure = 'ssl';

   $mail ->Host = "smtp.gmail.com";

   $mail ->Port = 465; // or 587



   $mail ->Username = $Username;

   $mail ->Password = $Password;

   $mail ->SetFrom($Username);

   $mail ->AddAddress($mailto);


    // $mail->Host       = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers

    // $mail->Username   = 'user@example.com';                     // SMTP Username
    // $mail->Password   = 'secret';                               // SMTP Password
    // $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    // $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    // $mail->setFrom('from@example.com', 'Mailer');
    // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    


    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $mailSub;
    $mail->Body    = $mailMsg;
    $mail->AltBody = $mailMsg;

    $mail->send();


    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}