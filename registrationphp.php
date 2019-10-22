<?php


$name = $_POST['name'];
$address = $_POST["address"];
$usernamee = $_POST["username"];
$passwords = $_POST["password"];
$number = $_POST["number"];
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";
$conn = mysqli_connect($servername, $username, $password, $database);


if(!$conn)
{
 	die("Failed to connect" . mysqli_connect_error());
 }



$sql="INSERT INTO users (name, address, usersname, password, number) VALUES ('$name', '$address', '$usernamee', '$passwords', '$number')";



if (mysqli_query($conn, $sql))
{
	echo "succes";
}
else
echo "error"."<br>".mysqli_error($conn);
header("location: login.php")

?>