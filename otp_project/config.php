<?php
// Configuration for email
$host = "localhost"; 
$dbname = "otp_sending"; 
$username = "root";  
$password = "";      

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return [
    'host' => 'smtp.gmail.com', // Your SMTP server
    'username' => 'rashedul16801@gmail.com', // Your email address
    'password' => 'itqj bcny wjos nhdm', // Your email password
    'port' => 587, // Typically 587 for TLS or 465 for SSL
    'from_email' => 'rashedul16801@gmail.com', // Sender email address
    'from_name' => 'Max Pro 30mg', // Sender name
];
?>
