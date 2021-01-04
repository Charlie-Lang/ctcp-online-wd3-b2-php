<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<table class="table table-dark table-stripped">
<thead>
	<tr>
		<th>ID</th>
		<th>Product Name</th>
		<th>Category</th>
		<th>Price</th>
		<th>Quantity</th>
	</tr>
</thead>
<tbody>
<?php
$sqlQuery = "SELECT * FROM tbl_sample3";

$result = $mysqli->query($sqlQuery);
var_dump($result);
echo "<hr/>";
while ($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>".$row['fld_id']."</td>";
	echo "<td>".$row['fld_product']."</td>";
	echo "<td>".$row['fld_category']."</td>";
	echo "<td>".$row['fld_price']."</td>";
	echo "<td>".$row['fld_quantity']."</td>";
	echo "</tr>";
}
?>
</tbody>
</table>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>