<?php
include 'config.php';

$limit = 3;
$page = $_GET['page'] ?? 1;
$start = ($page - 1) * $limit;
$search = $_GET['search'] ?? '';
$where = $search ? "WHERE name LIKE '%$search%' OR city LIKE '%$search%'" : "";

$totalQuery = "SELECT COUNT(*) AS total FROM customers $where";
$totalResult = $conn->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalPages = ceil($totalRow['total'] / $limit);

$sql = "SELECT * FROM customers $where LIMIT $start, $limit";
$result = $conn->query($sql);
?>

<table>
<tr>
<th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>City</th>
</tr>
<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['name'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['phone'] ?></td>
<td><?= $row['city'] ?></td>
</tr>
<?php } ?>
</table>

<div class="pagination">
<?php
for ($i = 1; $i <= $totalPages; $i++) {
    echo "<a href='?page=$i&search=$search'>$i</a>";
}
?>
</div>