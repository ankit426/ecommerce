
<!DOCTYPE html>
<html>
<head>
	<title>addnew</title>
</head>
<body>
  <h2><a href="allproducts.php">Click to see All Products</a></h2>
  <h2><a href="addproduct.php">Add New Product</a></h2>

<?php

session_start();
$productname = $_POST["productname"];
$category = $_POST["category"];
$discription = $_POST["discription"];
$price = $_POST["price"];
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";
$conn = mysqli_connect($servername, $username, $password, $database);


if(!$conn)
{
  die("Failed to connect" . mysqli_connect_error());
 }


$sql="INSERT INTO products (productname, category, discription, price) VALUES ('$productname', '$category', '$discription', '$price')";



if (mysqli_query($conn, $sql))
{
  echo "Product added succesfully";
}
else
echo "error"."<br>".mysqli_error($conn);



mysqli_close($conn);

session_destroy();

?>
</body>
</html>