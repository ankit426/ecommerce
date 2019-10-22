<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";
$conn = mysqli_connect($servername, $username, $password, $database);


if(!$conn)
{
 	die("Failed to connect" . mysqli_connect_error());
 }

//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['usernamee']) and isset($_POST['passwords'])){
//3.1.1 Assigning posted values to variables.
$usernamee = $_POST['usernamee'];
$passwords = $_POST['passwords'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `users` WHERE usersname='$usernamee' and password='$passwords'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['usernamee'] = $usernamee;
}else{echo "Invalid Login Credentials.";

//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['usernamee'])){
$usernamee = $_SESSION['usernamee'];
session_destroy();

echo "Hai " . $usernamee . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";

 header("location: dashboard.php");

}
//3.2 When the user visits the page first time, simple login form will be displayed.
?>