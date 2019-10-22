<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";
$conn = mysqli_connect($servername, $username, $password, $database);

if($conn)

        
$id = $_GET['id'];
$sql= "DELETE FROM products WHERE id='$id'";
	

if (mysqli_query($conn, $sql)) ;
header("location: allproducts.php");	

?>