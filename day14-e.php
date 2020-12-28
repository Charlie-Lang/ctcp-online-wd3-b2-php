<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Arrays and Things</title>
</head>
<body class="container">
<?php
$sample = array("T-shirt"
	,"Jacket"
	,"Sweater"
	,"Sando"
	,"Polo");
var_dump($sample);
echo "<hr/>";
echo "cell 2 contents: " . $sample[2];

$sample[2] = "Barong";
echo "<hr/>";
var_dump($sample);
echo "<hr/>";
echo "Total items in sample array: " . count($sample);
echo "<hr/>";
$sample[5] = "Poncho";
echo "<hr/>";
var_dump($sample);
?>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>