<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<h1>With search</h1>
<form action="" method="GET">
	Search: <input type="text" name="search">
	Search By:
	<select name="searchBy">
		<option>Product Name</option>
		<option>Category</option>
	</select>
	<button type="submit" name="submit">SEARCH</button>
</form>
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
$sqlWhere = "1";
if (isset($_GET['submit'])) {
$search="'%".$mysqli->real_escape_string($_GET['search'])."%'";
$searchBy=$mysqli->real_escape_string($_GET['searchBy']);
$fldName="";
switch ($searchBy) {
	case 'Product Name':
		$fldName="fld_product";
		break;
	case 'Category':
		$fldName="fld_category";
		break;
	default:
		$fldName="fld_product";
		break;
}
$sqlWhere = $fldName . " LIKE " . $search;
}

$sqlQuery = "SELECT * FROM tbl_sample3 WHERE $sqlWhere";

$result = $mysqli->query($sqlQuery);
echo "$sqlQuery";
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