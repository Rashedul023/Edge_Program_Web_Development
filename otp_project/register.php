<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$config = include('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $otp = rand(100000, 999999); 

  
    
    $conn->query("DELETE FROM temp_users WHERE email='$email'"); 
    $conn->query("INSERT INTO temp_users (name, email, otp) VALUES ('$name', '$email', '$otp')");

  
    
    
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $config['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['username'];
        $mail->Password = $config['password'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS encryption
        $mail->Port = $config['port'];
    
        // Email sender and recipient
        $mail->setFrom($config['from_email'], $config['from_name']);
        $mail->addAddress($email); // Recipient email
    

        $mail->isHTML(true);
        $mail->Subject = 'Your OTP Code';
        $mail->Body = "Your OTP is <b>$otp</b>";

        $mail->send();
        echo "OTP sent to your email!";
    } catch (Exception $e) {
        echo "Error in sending email: " . $mail->ErrorInfo;
    }

    $conn->close();
    header("Location: verify.php");
    exit();
}
?>

<h2>Sign Up</h2>
<form method="POST" action="">
    <input type="text" name="name" placeholder="Enter Name" required><br><br>
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <button type="submit">Register</button><br><br>

</form>
