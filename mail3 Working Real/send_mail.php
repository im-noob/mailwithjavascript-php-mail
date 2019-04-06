<?php
    


    // $json = file_get_contents('php://input');
    
    // // decoding the received JSON and store into $obj variable.
    // $obj = json_decode($json,true);
    
    
    
    // //Checking Email is already exist or not using SQL query.
    // $mailto = $obj['mail_to'];
    // $mailSub = $obj['mail_sub'];
    // $mailMsg = $obj['mail_msg'];



//Checking Email is already exist or not using SQL query.
    $mailto = 'aaravonly4you@gmail.com';
    $mailSub = 'hiiitest ';
    $mailMsg = 'hello';


   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
 
   // new 2 line code for wokring 
   $mail->IsSMTP();
   $mail->SMTPAuth = true;

   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "javaaprimer123@gmail.com";
   $mail ->Password = "java123help";
   $mail ->SetFrom("javaaprimer123@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       $json = json_encode("Mail Not Sent");
       echo $json;
   }
   else
   {
       $json = json_encode("Mail Sent");
       echo $json;
       
   }





   

