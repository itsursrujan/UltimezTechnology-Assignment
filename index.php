<!DOCTYPE html>
<html>
<head>
    <title>Product List - PHP</title>
</head>
<body>

<h2>Add Product</h2>

<form action="store.php" method="POST">
    <label>Product Name:</label>
    <input type="text" name="pname" required><br><br>

    <label>Product Price:</label>
    <input type="number" name="pprice" required><br><br>

    <button type="submit">Add Product</button>
</form>

<br>

<a href="display.php">View Product List</a>

</body>
</html>
