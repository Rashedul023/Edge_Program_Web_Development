<?php
include 'config.php';

$category = isset($_GET['category']) ? $_GET['category'] : '';

$query = "SELECT * FROM management";
if ($category) {
    $query .= " WHERE category = :category";
}

$stmt = $conn->prepare($query);
if ($category) {
    $stmt->bindParam(':category', $category);
}
$stmt->execute();
$records = $stmt->fetchAll();

echo "<a href='create.php'>Add New Record</a>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Phone</th><th>Email</th><th>Catagory</th><th>Actions</th></tr>";

echo "<form method='GET'>
        <select name='category' onchange='this.form.submit()'>
            <option value=''>Show All</option>
            <option value='Education'" . ($category == 'Education' ? ' selected' : '') . ">Education</option>
            <option value='Health'" . ($category == 'Health' ? ' selected' : '') . ">Health</option>
            <option value='Technology'" . ($category == 'Technology' ? ' selected' : '') . ">Technology</option>
        </select>
      </form>";



foreach ($records as $record) {
    echo "<tr>
            <td>" . $record['id'] . "</td>
            <td>" . $record['name'] . "</td>
            <td>" . $record['phone'] . "</td>
            <td>" . $record['email'] . "</td>
            <td>" . $record['category'] . "</td>
            <td>
                <a href='update.php?id=" . $record['id'] . "'>Edit</a> | 
                <a href='delete.php?id=" . $record['id'] . "'>Delete</a>
            </td>
          </tr>";
}
echo "</table>";
?>
