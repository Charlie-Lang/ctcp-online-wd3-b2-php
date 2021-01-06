<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<h1 class="bg-danger text-center"><ins class="text-white">DELETE</ins> Row</h1>
<?php
if (isset($_GET['id'])) {
	$id = $mysqli->real_escape_string($_GET['id']);
	$sqlQuery = "SELECT * FROM tbl_sample3 WHERE fld_id = $id LIMIT 0,1";
	$result = $mysqli->query($sqlQuery);
	$row = $result->fetch_assoc();
}
?>
<form action="" method="GET">
<table class="table table-danger">
	<tr>
		<td>Product Name:</td>
		<td><?php
		if (isset($_GET['id'])) {
			echo $row['fld_product'];
		}
		?></td>
	</tr>
	<tr>
		<td>Category:</td>
		<td><?php
		if (isset($_GET['id'])) {
			echo $row['fld_category'];
		}
		?></td>
	</tr>
	<tr>
		<td>Product Price:</td>
		<td><?php
		if (isset($_GET['id'])) {
			echo $row['fld_price'];
		}
		?></td>
	</tr>
	<tr>
		<td>Product Quantity:</td>
		<td><?php
		if (isset($_GET['id'])) {
			echo $row['fld_quantity'];
		}
		?></td>
	</tr>
</table>
<button class="btn btn-danger" type="submit" name="submit">DELETE</button>
<input type="hidden" name="pid" value="<?php
if (isset($_GET['id'])) {
	echo $row['fld_id'];
}
?>">
<a href="day17-d-select.php">Cancel</a>
</form>

<?php
if (isset($_GET['submit'])) {
// to declare all items to be used in the sql query
$pid=$mysqli->real_escape_string($_GET['pid']);

// variables to check and recieve the output
$resultMessage=""; //SQL query is executed
$runQuery=true; //we will change it to false to stop the sql query from executing

//filters

// the sql query that will be executed
$sqlQuery="DELETE FROM 
	tbl_sample3
WHERE fld_id='$pid'";

echo "$sqlQuery";

if ($runQuery) {
	$result = $mysqli->query($sqlQuery);
	if ($result == true) {
		$resultMessage = "Row Deleted";
	} else {
		$resultMessage = "Delete failed";
	}
}else {
	$resultMessage .= "Delete Query Failed<br/>";
}

// echo "$resultMessage";
header("Location: day17-d-select.php?result=$resultMessage");
}
?>

<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>