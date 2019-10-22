<?php
$id = $_GET['id'];
echo "$id";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit product</title>
</head>
<body>
		<form action="update.php?id=<?php echo $id; ?>" method="POST">

<label for="name">Product Name</label>
<input type="text" name="name" id="name" value="">
<br>
<label for="category">Category</label>
<input type="text" name="category" id="category" value="">
<br>
<label for="discription">Discription</label>
<input type="text" name="discription" id="discription" value="">
<br>
<label for="price">Price</label>
<input type="text" name="price" id="price" value="">
<br>

<input type="submit" name="update" value="update">
</form>
</html>


