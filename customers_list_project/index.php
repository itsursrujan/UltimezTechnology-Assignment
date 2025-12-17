<!DOCTYPE html>
<html>
<head>
    <title>Customers List</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<h2>Customers List</h2>
<form method="GET">
    <input type="text" name="search" placeholder="Search by name or city"
           value="<?php echo $_GET['search'] ?? ''; ?>">
    <button type="submit">Search</button>
</form>
<?php include 'fetch_customers.php'; ?>
</body>
</html>