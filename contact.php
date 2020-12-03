
<?php

include('sendmail.php');
include('index.php');

/*
 *  CONFIGURE EVERYTHING HERE
 */

// an email address that will be in the From field of the email.
//$fromEmail = 'debzee@gmail.com';
//$fromName = 'adebz';


// an email address that will receive the email with the output of the form
//$sendToEmail = 'nikjetfree@gmail.com';
//$sendToName = 'Tman';


// subject of the email
//$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
//$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');

// message that will be displayed when everything is OK :)
//$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
//$errorMessage = 'There was an error while submitting the form. Please try again later';


    //header('Location:FormSucess.php');



/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
//error_reporting(E_ALL & ~E_NOTICE);

//try
//{

  //  if(count($_POST) == 0) throw new \Exception('Form is empty');
            
   // $emailText = "You have a new message from your contact form\n=============================\n";

  //  foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email 
      //  if (isset($fields[$key])) {
       //     $emailText .= "$fields[$key]: $value\n";
      //  }
   // }

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
       // 'Return-Path: ' . $from,
    );
    
    // Send email
   //mail($sendTo, $subject, $emailText, implode("\n", $headers));
   //mail('nikjetfree@gmail.com', $subject, $emailText, implode("\n", $headers));
   //$mail->addAddress($sendToEmail, $sendToName);
//$mail->addAddress('nikjetfree@gmail.com', 'Johnny');
   
   
   
   // For success and error response array of mail transit

    $responseArray = array('type' => 'success', 'message' => $okMessage);
//}
//catch (\Exception $e)
//{
 //   $responseArray = array('type' => 'danger', 'message' => $errorMessage);
//}


  
//redirect to success page after sending form or display error if error occurs

	if ($responseArray['type'] == 'success') {
    // success redirect

    header('Location:./FormSuccess.php');
	}
	else {
    //error redirect
    header('Location:./FormError.php');
	}
  
  
  
  
  
  
  


//$emailTextHtml = "<h1>You have a new message from your contact form</h1><hr>";
//$emailTextHtml .= "<table>";

//foreach ($_POST as $key => $value) {
    // If the field exists in the $fields array, include it in the email
   // if (isset($fields[$key])) {
      //  $emailTextHtml .= "<tr><th>$fields[$key]</th><td>$value</td></tr>";
   // }
//}
//$emailTextHtml .= "</table><hr>";
//$emailTextHtml .= "<p>Have a nice day,<br>Best,<br>Ondrej</p>";










// if requested by AJAX request return JSON response
//if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
 //   $encoded = json_encode($responseArray);

  //  header('Content-Type: application/json');

  //  echo $encoded;
//}
// else just display the message
//else {
//    echo $responseArray['message'];
//}








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
//try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";   // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = "nikjetfree@gmail.com";                 // SMTP username
    $mail->Password = "Deblog38";                           // SMTP password
    $mail->SMTPSecure = "tls";                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to 587 old one

    //Recipients
    $mail->setFrom('debzeet@gmail.com', "debz Tol");          //Add your mail sender
    $mail->addAddress("nikjetfree@gmail.com", "Tolz");     // Add your mail recipient
    //$mail->addAddress('ellen@example.com');               // Add more mail recipients this is optional
    $mail->addReplyTo("nikjetfree@gmail.com");				// Add reply-to email address path where users would reply
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Form Submission";           //: '.$_POST['subject'];
    $mail->Body = '<h1 align=center>'.$_POST['msg'].'</h1>';
  // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients, does not show message but empty space';

 $mail->send();                    //send mail function for mail to be sent
   
        // if (!$mail->Send())
     //{
	//	 $result = "Sorry an error occurred. Please try again.";
		// header('Location: FormError.php');
		 //$result="Something went wrong. Please try again.";
	//}else{
	//	 $result = "Thanks ".$_POST['name']." for contacting us!.";
          //error redirect
 // header('Location: FormSuccess.php');

	//}


 //echo 'Message has been sent';
//}catch (Exception $e) {
   // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
//}
// if requested by AJAX request return JSON response














































