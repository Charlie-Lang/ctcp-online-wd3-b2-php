<?php
$serverName="127.0.0.1";
$userName="root";
$password="";
$database="cane_wd3_b2";

$mysqli = new mysqli($serverName,$userName,$password,$database);

if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>