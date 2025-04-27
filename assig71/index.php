<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
</head>
<body>

<h2>Add New Employee</h2>
<form method="POST" action="add.php">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Position: <input type="text" name="position" required><br><br>
    <input type="submit" value="Add Employee">
</form>

<hr>

<h2>Employee List</h2>

<?php
$result = $conn->query("SELECT * FROM employees");

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'><tr><th>ID</th><th>Name</th><th>Email</th><th>Position</th><th>Actions</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['position']."</td>
            <td>
                <a href='edit.php?id=".$row['id']."'>Edit</a> |
                <a href='delete.php?id=".$row['id']."' onclick=\"return confirm('Are you sure?');\">Delete</a>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No employees found.";
}
?>

</body>
</html>
