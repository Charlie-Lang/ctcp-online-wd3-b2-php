<!DOCTYPE html>
<?php
$serverName="127.0.0.1";
$userName="root";
$password="";
$database="cane_wd3_b2";

$mysqli = new mysqli($serverName,$userName,$password,$database);

if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "<br/>";
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// to declare all items to be used in the sql query
$wName="";
$wAddress="12 Mango Drive";
$wContact="0999 555 2345";
$depID="1";
// variables to check and recieve the output
$resultMessage=""; //SQL query is executed
$runQuery=true;

if (is_numeric($depID) == false) {
	$runQuery=false;
	$resultMessage.="Department ID is not valid<br/>";
}

if (empty($wName)) {
	$runQuery=false;
	$resultMessage.="No name input<br/>";
}

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
	var_dump($result);
}

echo "$resultMessage";

?>

</body>
</html>