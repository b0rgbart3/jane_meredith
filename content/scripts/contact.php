<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require '../PHPMailer/src/Exception.php';
// require '../PHPMailer/src/PHPMailer.php';
// require '../PHPMailer/src/SMTP.php';

// // Import PHPMailer classes into the global namespace
// // These must be at the top of your script, not inside a function
// // use PHPMailer\PHPMailer\PHPMailer;
// // use PHPMailer\PHPMailer\Exception;

// //Load composer's autoloader
// require '../vendor/autoload.php';



// $mail = new PHPMailer(true);                              // Passing `true` enables exceptions


/**** */


$contact_success=false;
$firstname = '';
$lastname = '';
$email = '';
$message = '';
$error = '';
$errorfield = "";
$datareceived = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_POST['submit']))
    {

        if (isset($_POST['message'])) {
            $message = trim($_POST['message']);
         
            if ($message=='') {
                $errorfield = "message";
                $error = "a message";
            }
        } else {
            $errorfield = "message";
            $error = "a message";
            echo "<br>Missing message.";
        }

        if (isset($_POST['email'])) {
            $email = trim($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = "a valid email";
                $errorfield = "email";
            }

            if ($email=='') {
                $error = "a valid email";
                $errorfield = "email";
            }
        } else {
              $error = "a valid email";
              $errorfield = "email";
        }
        
        if (isset($_POST['firstname'])) {
            $firstname = trim($_POST['firstname']);
            if ($firstname=='') {
                $error = "your first name";
                $errorfield = "firstname";
            }
        } else {
              $error = "your first name";
              $errorfield="firstname";
        }
        if (isset($_POST['lastname'])) {
            $lastname = trim($_POST['lastname']);
            if ($lastname=='') {
                $error = "your last name";
                $errorfield = "lastname";
            }
        }
        else {
              $error = "your last name";
              $errorfield="lastname";
        }
        if ($error == '') {
                //echo "<br>No errors.";
                $datareceived = true;

                $data = [];
                $data['firstname'] = $firstname;
                $data['lastname'] = $lastname;
                $data['email'] = $email;
                $data['message'] = $message;
                
                sendContactMessage($data);
                unset($_POST);

                       //print_r($_POST);
                $contact_success=true;

        } 
        else {
            echo "Error: " . $error;
        }
    
    
        
    }
}

function sendContactMessage( $data) {

    //if ($live) {
        $to = "jane@janemeredith.com";
        $to = "b0rgBart3@gmail.com";
   // } else {
   //     $to = "b0rgBart3@gmail.com";
    //}
    $subject = "A message was received from JaneMeredith.com";

    $message = <<<EOD
    <html>
    <head>
    <title>JaneMeredith.com</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel="stylesheet">
    </head>
    <body style="font-size:16px; font-family:sans-serif; color:#000000">
   
EOD;

    $message .= "<div style='color:#000000;background-color:#ffefef;padding:30px;margin-right:20px;border-radius:8px;border:4px solid pink;'>";
    $message .=  "<h1 style='color:#ff5566;'>A message from JaneMeredith.com</h1>";
    $labelIndex = 0;
    
    $message .="<p><span style='color:#ff5566;'>From:</span><br>";
    $message .= $data['firstname']." ".$data['lastname']."<br>";
    $message .= $data['email']."</p>";
    $message .= "<p><span style='color:#ff5566;'>Message:</span><br>".$data['message']."</p>";
    
    $message .= "</div><br></body></html>";
    
    // Always set content-type when sending HTML email
   // $headers = "MIME-Version: 1.0" . "\r\n";
  //  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
   // $headers .= 'From: <JaneMeredith@JaneMeredith.com>' . "\r\n";
   // $headers .= 'Bcc: borgBart3@gmail.com' . "\r\n";
  
    // This was the old way -- using "mail"
   // $contact_success = mail($to,$subject,$message,$headers);
  
   // This is the new way -- using "smtp mail"
   $mail = new PHPMailer(true);  
   try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.dreamhost.com';                   // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'Jane@JaneMeredith.com';            // SMTP username
    $mail->Password = '3pianofactories';                         // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('JaneMeredith@JaneMeredith.com', 'JaneMeredith');
    $mail->addAddress('jane@janemeredith.com', 'JaneMeredith');     // Add a recipient
    //$mail->addAddress('contact@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    $mail->addBCC('b0rgBart3@gmail.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'A new message from JaneMeredith.com';
    $mail->Body    = $message; // 'This is just a test';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   // echo 'Message has been sent';
} catch (Exception $e) {
    echo 'We apologize for the inconvenience - but your message could not be sent.';
    echo '<br>' . $mail->ErrorInfo;
}



    
}


