<?php
include("db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$position = $_POST['position'];

$sql = "INSERT INTO employees (name, email, position) VALUES ('$name', '$email', '$position')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
