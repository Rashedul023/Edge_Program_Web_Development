<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $category = $_POST['category'];

    $query = "INSERT INTO management (name, phone, email, category) VALUES (:name, :phone, :email, :category)";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':category', $category);

    $stmt->execute();
    header("Location: index.php");
    exit();
}

echo "<form method='POST'>
        <label>Name:</label><br>
        <input type='text' name='name' required><br>
        <label>Phone:</label><br>
        <input type='text' name='phone' required><br>
        <label>Email:</label><br>
        <input type='email' name='email' required><br>
        <label>Category:</label><br>
        <select name='category' required>
            <option value=''>Select Category</option>
            <option value='Education'>Education</option>
            <option value='Health'>Health</option>
            <option value='Technology'>Technology</option>
        </select><br>
        <input type='submit' value='Add'>
      </form>";
?>
