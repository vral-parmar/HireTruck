<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'jamesmrt070@gmail.com';                 // SMTP username
    $mail->Password = 'Hackie@789';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('jamesmrt070@gmail.com', 'Viral from Hire Truck');
    $mail->addAddress('jamesmrt070@gmail.com', 'Viral Parmar');     // Add a recipient
    $mail->addAddress('parmarviral93@gmail.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'To Test is PHP mailer Work or not';
    $mail->Body    = 'Hello Its viral from <b>Hire Truck</b> this is an email for test is php mailer work well or not Lorem ipsum dolor sit amet, <b>consectetuer adipiscing elit</b>. Maecenas porttitor congue massa. <super>Fusce posuere</super>, magna sed pulvinar ultricies, purus lectus malesuada <br>Mauris eget neque at sem venenatis eleifend. Ut nonummy. <div>Fusce aliquet pede non pede.</div> Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec bl';
    $mail->AltBody = 'Nothing';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>