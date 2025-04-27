<?php
$host = "localhost";
$username = "abhishek";
$password = "abhishek";
$dbname = "ebookshop";
$conn = mysqli_connect($host, $username, $password, $dbname);
if(! $conn)
{ die('Error: '.mysqli_error());
}
?>