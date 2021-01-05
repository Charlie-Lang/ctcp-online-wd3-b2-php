<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<?php
$sqlWhere = "1";
$sqlOrder = "ORDER BY fld_id";
$searchParams="";
if (isset($_GET['search'])) {
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
$searchParams="&search=".trim($_GET['search'])."&searchBy=".trim($_GET['searchBy']);
$sqlWhere = $fldName . " LIKE " . $search;
}
if (isset($_GET['sort'])) {
	switch ($mysqli->real_escape_string($_GET['sort'])) {
		case 'name':
			$sqlOrder = "ORDER BY fld_product";
			break;
		case 'cat':
			$sqlOrder = "ORDER BY fld_category";
			break;
		case 'price':
			$sqlOrder = "ORDER BY fld_price";
			break;
		case 'qty':
			$sqlOrder = "ORDER BY fld_quantity";
			break;
		default:
			$sqlOrder = "ORDER BY fld_id";
			break;
	}
}

$sqlQuery = "SELECT * FROM tbl_sample3 WHERE $sqlWhere $sqlOrder";
?>
<h1>With Search</h1>
<h1>With Sorting</h1>
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
		<th><a href="?sort=name<?php echo $searchParams; ?>">
			Product Name
		</a></th>
		<th><a href="?sort=cat<?php echo $searchParams; ?>">
			Category
		</a></th>
		<th><a href="?sort=price<?php echo $searchParams; ?>">
			Price
		</a></th>
		<th><a href="?sort=qty<?php echo $searchParams; ?>">
			Quantity
		</a></th>
	</tr>
</thead>
<tbody>
<?php
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