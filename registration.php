<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h1>Enter your Details for Registration</h1>
		<form action="registrationphp.php" method="POST">

<label for="name">Name</label>
<input type="text" name="name" id="name">
<br>
<label for="address">E-mail address</label>
<input type="text" name="address" id="address">
<br>
<label for="username">Username</label>
<input type="text=" name="username" id="username">
<br>
<label for="password">Password</label>
<input type="text" name="password" id="password">
<br>
<label for="number">Phone Number</label>
<input type="text" name="number" id="number">
<br>
<input type="submit" name="login">
</form>





<?php
/*
$_SERVER["REQUEST_METHOD"] == "POST";
$name =   $_POST["name"]);
$address =  $_POST["address"];
$usernamee =  $_POST["username"];
$passwords =  $_POST["password"];
$number =  $_POST["number"];
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
*/
?>
</body>
</html>
</html>
