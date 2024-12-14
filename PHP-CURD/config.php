<?php
$host = "localhost";
$dbname = "curd2";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Completed";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
