<?php
$body="";
// include_once('server.php');

//$username="";
//$first_name="";
//$last_name="";
//$phone_no="";
//$email="";
//$password="";
//$servername='localhost';
//$dbuser='root';
//$password='';
//$dbname='accounts';



//PHP MAILER SECTION
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailerAutoload.php';
//require 'credential.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';   // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nikjetfree@gmail.com';                 // SMTP username
    $mail->Password = 'Deblog38';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to 587 old one

    //Recipients
    $mail->setFrom('debzeet@gmail.com', 'debz Tol');
    $mail->addAddress('nikjetfree@gmail.com', 'green');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('nikjetfree@gmail.com');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Form Submission';
    //$mail->Body    = 'This will be the body<b>in bold!</b>';
	$mail->Body = '<h1 align="center">'.$_POST['msg'].'</h1>';   
   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';   //if u use this in contact form it will show empty space in the body section

    $mail->send();
    echo 'Message has been sent';
	header('Location: FormSuccess.php');           //must include this header location to redirect user to form success page after ending contact us form credentials
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}




















?>

