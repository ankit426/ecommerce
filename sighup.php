<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $addressErr = $usernameeErr = $passwordsErr = $numberErr "";
$name = $address = $usernamee = $passwords = $number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["address"])) {
    $emailErr = "Email is required";
  } else {
    $address = test_input($_POST["address"]);
    // check if e-mail address is well-formed
    if (!filter_var($address, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    

  if (empty($_POST["usernamee"])) {
    $usernameeErr = "usernamee is required";
  } else {
    $usernamee = test_input($_POST["usernamee"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$usernamee)) {
      $usernameeErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["passwords"])) {
    $nameErr = "password is required";
  } else {
    $passwords = test_input($_POST["passwords"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$passwords)) {
      $passwordsErr = "Only letters and white space allowed";
    }
  }


  if (empty($_POST["number"])) {
    $numberErr = "number is required";
  } else {
    $number = test_input($_POST["number"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$number)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Enter Details for Registration</h2>
<p>* required field</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span>* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="address" value="<?php echo $address;?>">
  <span>* <?php echo $emailErr;?></span>
  <br><br>
  username: <input type="text" name="username" value="<?php echo $username;?>">
  <span><?php echo $usernameErr;?></span>
  password: <input type="text" name="password" value="<?php echo $password;?>">
  <span><?php echo $passwordErr;?></span>
  number: <input type="text" name="number" value="<?php echo $number;?>">
  <span><?php echo $numberErr;?></span>
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $address;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $number;
?>

</body>
</html>