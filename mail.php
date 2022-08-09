
<?php
 error_reporting(0);
require 'PHPMailer/PHPMailerAutoload.php';
require 'file.php';


// use PHPMailer\PHPMailerAutoload;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];



$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAILID;                 // SMTP username
$mail->Password = PASSWORD;                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom($to,'burj');

$mail->addAddress('burjalnoor2021@gmail.com','Burj');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo(EMAILID, 'Burj');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $name;
$mail->Body ='<div><h3>Name:&nbsp;'.ucwords($name).'<br>Email:  &nbsp;'.$email.'<br>Message:&nbsp;'.$message.'</h3></div>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    // echo ' Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("location:contact.php");
}
}
?>