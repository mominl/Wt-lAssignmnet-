<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];

    $sql = "UPDATE employees SET name='$name', email='$email', position='$position' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating: " . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM employees WHERE id=$id");
    $row = $result->fetch_assoc();
?>
    <h2>Edit Employee</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br><br>
        Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br><br>
        Position: <input type="text" name="position" value="<?= $row['position'] ?>"><br><br>
        <input type="submit" value="Update Employee">
    </form>
<?php } ?>
