<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<h1>Odd or Even Number Tester</h1>
<form action="" method="GET">
	<input type="text" name="num1">
	<button type="submit" name="submit" value="submit">Check</button>
</form>
<?php
$num1;
$result;
if (isset($_GET["submit"])) {
	if (is_numeric($_GET['num1'])) {
		$num1 = $_GET['num1'];

		$remainder = $num1 % 2;

		if ($remainder == 0) {
			$result = "$num1 is an even number";
		} else {
			$result = "$num1 is an odd number";
		}
	} else {
		$result = "Input is not a number";
	}
	echo "$result";
}
?>


<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>