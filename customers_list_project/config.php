<?php
$conn = new mysqli("localhost", "root", "", "customer_db");
if ($conn->connect_error) {
    die("Database Connection Failed");
}
?>