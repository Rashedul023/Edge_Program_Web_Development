<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $otp = $_POST['otp'];
    //$name = $_POST['name'];

    
    $conn = new mysqli('localhost', 'root', '', 'otp_sending');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $result = $conn->query("SELECT otp, name FROM temp_users WHERE email='$email'");
    
    $row = $result->fetch_assoc();
    $storedOtp = $row['otp'];
    $name = $row['name'];

    if ($storedOtp == $otp) {
        echo "OTP Verified! Registration successful.";
        $conn->query("DELETE FROM temp_users WHERE email='$email'");
        $conn->query("DELETE FROM users WHERE email='$email'"); 
        $conn->query("INSERT INTO users (name, email, otp) VALUES ('$name', '$email', '$otp')");
       
    } else {
            echo "Invalid OTP. Please register again.";
    }

   
   

    $conn->close();
}
?>

<h2> Verify <h2>

<form method="POST" action="">

    <!-- <input type="text" name="name" placeholder="Enter Name" required><br><br> -->
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <input type="text" name="otp" placeholder="Enter OTP" required><br><br>

    <button type="submit">Verify OTP</button>
</form>
<br><br>
<a href="register.php">Register</a>
