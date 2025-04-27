<?php
require_once("config.php");
$bookId = $_POST["bookid"];
$bookTitle = $_POST["booktitle"];
$bookAuthor = $_POST["bookauthor"];
$bookPrice = $_POST["bookprice"];
Page 26
$bookQuantity = $_POST["bookquantity"];
$sql = "UPDATE `ebooks` SET `book_title`='$bookTitle', `book_author`='$bookAuthor', `book_price`=$bookPrice,
`book_quantity`=$bookQuantity WHERE `book_id`='$bookId'";
mysqli_query($conn, $sql);
?>
<html>
 <head>
 <title>Update E-Book Page</title>
 <style>
 table
 {
 text-align: left;
 border: 2px solid dodgerblue;
 border-radius: 6px;
 font-size: 20px;
 }
 th, td
 {
 border: 2px solid dodgerblue;
 border-radius: 6px;
 }
 input
 {
 font-size: 16px;
 }
 #submitButton:hover
 {
 background-color: dodgerblue;
 color: white;
 }
 </style>
 </head>
 <body>
 <center>
 <h1>Update E-Book Data</h1>
 <form action="" method="post">
 <table>
 <tr>
 <th>&nbsp;&nbsp;Book ID</th>
 <td><input type="text" name="bookid" placeholder="Book ID" required /></td>
 </tr>
 <tr>
 <th>&nbsp;&nbsp;Book Title</th>
 <td><input type="text" name="booktitle" placeholder="Book Title" required /></td>
 </tr>
 <tr>
 <th>&nbsp;&nbsp;Book Author</th>
 <td><input type="text" name="bookauthor" placeholder="Book Author" required /></td>
 </tr>
 <tr>
 <th>&nbsp;&nbsp;Book Price (Rs.) &nbsp;&nbsp;</th>
 <td><input type="number" name="bookprice" placeholder="Book Price" required /></td>
 </tr>
 <tr>
 <th>&nbsp;&nbsp;Book Quantity</th>
 <td><input type="number" name="bookquantity" placeholder="Book Quantity" required /></td>
 </tr>
 </table>
 <br/>
 <input id="submitButton" style="padding:3px; border-radius: 15px;" type="submit" value="&nbsp;Submit&nbsp;"
/>
 </form>
 </center>
 </body>
</html>