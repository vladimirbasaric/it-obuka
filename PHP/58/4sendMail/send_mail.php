<?php
    //
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
   
    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail ->IsSmtp(); //Set PHPMailer to use SMTP.
    $mail ->SMTPDebug = 0; //no debug
    $mail ->SMTPAuth = true; //

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission 465 ssl
    $mail->Port = 465;// or 587 

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'ssl'; //If SMTP requires TLS encryption then set it

    $mail ->IsHTML(true);  //Da li je mail u HTML formatu?
    $mail->FromName = "Vase ime"; // Ime i prezime pošiljaoca 
    $mail->addReplyTo("reply@yourdomain.com", "Reply"); //Adresa za odgovor
    $mail->addCC("cc@example.com"); //CC i BCC polja
    $mail->addBCC("bcc@example.com"); 
    $mail ->Username = "yourmail@gmail.com";
    $mail ->Password = "secret"; //tajna sifra
    $mail ->SetFrom("yourmail@gmail.com");
    $mail ->Subject = $mailSub;
    $mail ->Body = $mailMsg;
    $mail->AltBody = strip_tags($mailMsg); //This is the plain text version of the email content
    $mail ->AddAddress($mailto);

    if(!$mail->Send())
    {
       echo "Mail Not Sent"."<br>";
       echo $mail ->Subject."<br>";
       echo $mail ->Username."<br>";
       echo $mail ->Body."<br>";
       echo $mail ->SMTPSecure."<br>";
       echo "Mailer Error: " . $mail->ErrorInfo; 
    }
    else
    {
       echo "Mail Sent";
    }
?>