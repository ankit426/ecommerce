<!DOCTYPE html>
<html>
<head>
	<title>all products</title>
</head>
<body>
<div><h2><a href="index.php">Logout</a></h2></div>

	<h1>List of All Products</h1>



<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";
$conn = mysqli_connect($servername, $username, $password, $database);


if(!$conn)
{
  die("Failed to connect" . mysqli_connect_error());
 }
$query = "SELECT id, productname, category, discription, price FROM products";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0 )
{
  ?>
   <table>
    <tr>
      <th>ID___</th>
      <th> PRODUCT NAME ___________</th>
      <th> CATEGORY __________</th>
       <th> DISCCRIPTION __________</th>
        <th> PRICE __________</th>
   </tr>
 <?php
  while ($row = mysqli_fetch_assoc($result))
  { 
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row["productname"]."</td>
    <td>".$row["category"]."</td>
     <td>".$row["discription"]."</td>
      <td>".$row["price"]."</td>
    <td><a href='edit.php?id=$row[id]'>edit</a></td>
    <td><a href='delete.php?id=$row[id]'>delete</a></td>
    </tr>";
  }
}
else
echo "0 result";


mysqli_close($conn);

?>




</body>
</html>