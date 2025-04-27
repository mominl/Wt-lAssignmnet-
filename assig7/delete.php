<?php
require_once("config.php");
$bookId = $_POST["bookid"];
$sql = "DELETE FROM ebooks where book_id='$bookId'";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<html>
<head>
 <title>Delete E-Book Page</title>
 <style>
 table {
 text-align: left;
 border: 2px solid dodgerblue;
 border-radius: 6px;
 font-size: 20px;
 }
 th,
 td {
 border: 2px solid dodgerblue;
 border-radius: 6px;
 }
 input {
 font-size: 16px;
 }
 #submitButton:hover {
 background-color: dodgerblue;
 color: white;
 }
 </style>
</head>
<body>
 <center>
 <h1>Delete E-Book Data</h1>
 <br />
 <form action="" method="post">
 <table>
 <tr>
 <th>&nbsp;&nbsp;Book ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
 <td><input type="text" name="bookid" placeholder="Book ID" required /></td>
 </tr>
 </table>
 <br />
 <input id="submitButton" style="padding:3px; border-radius: 15px;" type="submit"
 value="&nbsp;Submit&nbsp;" />
 </form>
 </center>
</body>
</html>