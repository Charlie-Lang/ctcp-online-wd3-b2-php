<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<h1>Count UP</h1>
<?php
	$i=1;
	while ($i<=20) {
		$i += 3;
		echo "The number is $i <br/>";
	}
?>
<h2>Count DOWN</h2>
<?php
	$j=10;
	while ($j>=1) {
		echo "The number is $j <br/>";
		$j--;
	}
?>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>