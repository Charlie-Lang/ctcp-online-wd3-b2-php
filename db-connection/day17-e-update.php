<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<h1 class="bg-warning text-center">Update Row</h1>
<?php
if (isset($_GET['id'])) {
	$id = $mysqli->real_escape_string($_GET['id']);
	$sqlQuery = "SELECT * FROM tbl_sample3 WHERE fld_id = $id LIMIT 0,1";
	$result = $mysqli->query($sqlQuery);
	$row = $result->fetch_assoc();
}
?>
<form action="" method="GET">
Product Name: <input type="text" name="pName" value="<?php
if (isset($_GET['id'])) {
	echo $row['fld_product'];
}
?>"><br/>
Category: <select name="category">
<?php
$category = array("Drinks", "Instant Noodles", "Snacks", "Spreads", "Canned Goods");
foreach ($category as $value) {
	if ($value == $row['fld_category']) {
		echo "<option selected>$value</option>";
	} else {
		echo "<option>$value</option>";
	}
}
?>
</select><br/>
Product Price: <input type="text" name="pPrice" value="<?php
if (isset($_GET['id'])) {
	echo $row['fld_price'];
}
?>"><br/>
Product Quantity: <input type="text" name="pQty" value="<?php
if (isset($_GET['id'])) {
	echo $row['fld_quantity'];
}
?>"><br/>
<button type="submit" name="submit">UPDATE</button>
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
$pName=$mysqli->real_escape_string($_GET['pName']);
$category=$mysqli->real_escape_string($_GET['category']);
$pPrice=$mysqli->real_escape_string($_GET['pPrice']);
$pQty=$mysqli->real_escape_string($_GET['pQty']);
$pid=$mysqli->real_escape_string($_GET['pid']);

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
$sqlQuery="UPDATE 
	tbl_sample3 
SET fld_product='$pName'
	,fld_category='$category'
	,fld_price='$pPrice'
	,fld_quantity='$pQty' 
WHERE fld_id='$pid'";

echo "$sqlQuery";

if ($runQuery) {
	$result = $mysqli->query($sqlQuery);
	if ($result == true) {
		$resultMessage = "success";
	} else {
		$resultMessage = "failed";
	}
}else {
	$resultMessage .= "Update Query Failed<br/>";
}

// echo "$resultMessage";
header("Location: day17-d-select.php?result=$resultMessage");
}
?>

<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>