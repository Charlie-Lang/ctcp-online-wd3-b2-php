<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<form action="" method="GET">
Name: <input type="text" name="wName"><br/>
Address: <br/>
<textarea name="wAddress"></textarea><br/>
Contact: <input type="text" name="wContact"><br/>
Department: <select name="depID">
	<option value="1">props</option>
	<option value="2">meal</option>
	<option value="3">entertainment</option>
	<option value="5">maintenance</option>
</select>
<button type="submit" name="submit">Send</button>
</form>
<a href="day16-b.php" class="btn btn-danger">RESET</a>
<?php
if (isset($_GET['submit'])) {
// to declare all items to be used in the sql query
$wName=$_GET['wName'];
$wAddress=$_GET['wAddress'];
$wContact=$_GET['wContact'];
$depID=$_GET['depID'];
// variables to check and recieve the output
$resultMessage=""; //SQL query is executed
$runQuery=true;

// the sql query that will be executed
$sqlQuery="INSERT INTO
	tbl_workers
	(fld_Name
	,fld_address
	,fld_contact
	,fld_did)
VALUES
	('$wName'
	,'$wAddress'
	,'$wContact'
	,'$depID')";

//echo "$sqlQuery";

if ($runQuery) {
	$result = $mysqli->query($sqlQuery);
	if ($result == true) {
		$resultMessage = "success";
	} else {
		$resultMessage = "failed";
	}
}

echo "$resultMessage";
}
?>

<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>