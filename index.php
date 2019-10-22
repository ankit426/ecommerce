
<!DOCTYPE html>
<html>
<head>
	<title>addnew</title>
</head>
<body>
<div><br>
<h1><a href="login.php">Login to add products</a></h1>

</div>
  

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
    
    </tr>";
  }
}
else
echo "0 result";


mysqli_close($conn);


?>
</body>
</html>