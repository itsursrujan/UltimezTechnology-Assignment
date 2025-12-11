<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

$name = $_POST['pname'];
$price = $_POST['pprice'];

$product = [
    "productName" => $name,
    "productPrice" => $price
];

$_SESSION['products'][] = $product;

header("Location: display.php");
exit();
?>
