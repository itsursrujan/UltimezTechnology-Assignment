<?php
session_start();
$products = $_SESSION['products'] ?? [];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>

<h2>Stored Product List</h2>

<?php
if (count($products) > 0) {
    echo "<ul>";
    $total = 0;

    foreach ($products as $p) {
        echo "<li>" . $p['productName'] . " - Rs." . $p['productPrice'] . "</li>";
        $total += $p['productPrice'];
    }

    echo "</ul>";
    echo "<h3>Total Price: Rs.$total</h3>";
} else {
    echo "<p>No products added yet.</p>";
}
?>

<br>
<a href="index.php">Add More Products</a>

</body>
</html>
