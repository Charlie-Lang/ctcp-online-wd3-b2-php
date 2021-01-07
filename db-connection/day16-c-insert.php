<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<h1>Now with Filters</h1>
<form action="" method="GET">
Product Name: <input type="text" name="pName"><br/>
Category: <select name="category">
	<option>Drinks</option>
	<option>Instant Noodles</option>
	<option>Snacks</option>
	<option>Spreads</option>
	<option>Canned Goods</option>
</select><br/>
Product Price: <input type="text" name="pPrice"><br/>
Product Quantity: <input type="text" name="pQty"><br/>
<button type="submit" name="submit">Send</button>
</form>
<hr/>
<a href="day16-c.php" class="btn btn-danger">RESET</a>
<hr/>
<a href="day17-d-select.php" class="btn btn-primary">view all items</a><hr/>
<?php
if (isset($_GET['submit'])) {
// to declare all items to be used in the sql query
$pName=$mysqli->real_escape_string($_GET['pName']);
$category=$mysqli->real_escape_string($_GET['category']);
$pPrice=$mysqli->real_escape_string($_GET['pPrice']);
$pQty=$mysqli->real_escape_string($_GET['pQty']);

// variables to check and recieve the output
$resultMessage=""; //SQL query is executed
$runQuery=true; //we will change it to false to stop the sql query from executing

//filters
if (empty($pName) || strlen(trim($pName)) == 0) {
	$runQuery=false;
	$resultMessage.="Name Textbox is empty<br/>";
} //https://stackoverflow.com/questions/2352779/if-string-only-contains-spaces#2352789
if (is_numeric($pPrice) == false) {
	$runQuery=false;
	$resultMessage.="Price is not a number<br/>";
}
if (is_numeric($pQty) == false) {
	$runQuery=false;
	$resultMessage.="Quantity is not a number<br/>";
}


// the sql query that will be executed
$sqlQuery="INSERT INTO tbl_sample3
	(fld_product
	, fld_category
	, fld_price
	, fld_quantity) 
VALUES 
	('$pName'
	,'$category'
	,'$pPrice'
	,'$pQty')";

echo "$sqlQuery";

if ($runQuery) {
	$result = $mysqli->query($sqlQuery);
	if ($result == true) {
		$resultMessage = "success";
	} else {
		$resultMessage = "failed";
	}
}else {
	$resultMessage .= "Insert Query Failed<br/>";
}

echo "$resultMessage";
}
?>

<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>