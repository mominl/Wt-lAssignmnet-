<?php
require_once("config.php");
$sql = "SELECT * FROM ebooks ORDER BY insert_order DESC";
$result = mysqli_query($conn, $sql);
?>
<html>
 <head>
 <title>View E-Book Page</title>
 <meta http-equiv="refresh" content="3" />
 <style>
 table {
 font-family: arial, sans-serif; width: 100%; border: 2px solid dodgerblue; border-radius: 5px;
 }
 td, th {
 border: 2px solid dodgerblue; text-align: left;padding: 8px;
 }
 tr:nth-child(even) {
 border: 1px solid dodgerblue; background-color: #e7feff;
 }
 </style>
 </head>
 <body>
 <h3 style='font-size: 27px; text-align: center;'>Updating Data Every 3 Seconds</h3>
 <table>
 <tr>
 <th>Book ID</th>
 <th>Book Title</th>
 <th>Book Author</th>
 <th>Book Price (Rs.)</th>
 <th>Book Quantity</th>
 </tr>
 <?php
 while ($row = mysqli_fetch_assoc($result))
 {
 ?>
 <tr><td> <?php echo $row['book_id']; ?> </td> <td> <?php echo $row['book_title']; ?> </td> <td> <?php
echo $row['book_author']; ?> </td> <td> <?php echo $row['book_price']; ?> </td> <td> <?php echo
$row['book_quantity']; ?> </td></tr>
 <?php
 }
 mysqli_close($conn);
 ?>
 </table>
 </body>
</html>