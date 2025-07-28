<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Form</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f3f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .email-form-container {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: rgba(64, 179, 255, 0.8) 0px 5px 15px;
            width: 100%;
            max-width: 500px;
        }

        .email-form-container h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .email-form input,
        .email-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        .email-form textarea {
            resize: vertical;
            height: 120px;
        }

        .email-form button {
            width: 100%;
            padding: 12px;
            border: none;
            background: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }

        .email-form button:hover {
            background: #0056b3;
        }

        @media (max-width: 500px) {
            .email-form-container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    // $datess=$_POST['datess'];

    }   
?>
<div class="email-form-container">
    <h2>Send Email</h2>
    <form class="email-form" action="demo.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="email" name="email" placeholder="Enter Email" required />
        <input type="text" name="subject" placeholder="Subject" value="<?php echo $subject ?>" required />
        <textarea name="message" placeholder="Enter Message"  required><?php echo "$message"?></textarea>
        <button type="submit" name="submit">Send Email</button>
    </form>
</div>

</body>

</html>

<?php

   //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['submit']))
    {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    // $datess=$_POST['datess'];
 

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'karan2khara2@gmail.com';                     //SMTP username
    $mail->Password   = 'ybxa jfst blfr ysbz';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('karan2khara2@gmail.com', 'administrators announcements');
    $mail->addAddress("$email"," ");     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Announcements';
    $mail->Body    = "Sender Name -Admin <br><br> message -$message";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>alert(\'Message has been sent\');</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }

?>
