<?php
$name = $_POST['name'];
$category = $_POST["category"];
$discription = $_POST["discription"];
$price = $_POST["price"];
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";
$conn = mysqli_connect($servername, $username, $password, $database);
  $id = $_GET['id'];
  echo "HELLOO";
	 $sql= "UPDATE products SET productname='$name', category='$category', discription='$discription', price='$price' WHERE id='$id'";
     if (mysqli_query($conn, $sql))
     	header("location: allproducts.php");

mysqli_close($conn);
?>