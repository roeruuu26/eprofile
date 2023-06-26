<?php 
// Import PHPMailer classes into the global namespace // These must be at the top of your script, not inside a function 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php'; 
require './PHPMailer/src/PHPMailer.php'; 
require './PHPMailer/src/SMTP.php'; 

$mail = new PHPMailer(true); // Passing `true` enables exceptions 
try { 
//Server settings 
    $mail->SMTPDebug = 2; // Enable verbose debug output 
    $mail->isSMTP(); // Set mailer to use SMTP 
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers 
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username   = "roeruuu@gmail.com";
    $mail->Password   = "sgpqfhciqquutmcy";
    $mail->SMTPSecure = 'tls'; // Enable SSL encryption, TLS also accepted with port 465 
    $mail->Port = 587; // TCP port to connect to 

    //Recipients 
   // $mail->setFrom= $_POST["email"]; //This is the email your form sends From 
    $mail->addAddress('roeruuu@gmail.com'); // Add a recipient address 
    //Content 
    $mail->isHTML(true); // Set email format to HTML 
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send(); echo 'Message has been sent'; 
} catch (Exception $e) { echo 'Message could not be sent.'; 
} 
?>