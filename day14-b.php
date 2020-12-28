<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>for loop 2</title>
</head>
<body class="container">
<h2>Count from number up to itself + 10</h2>
<form action="" method="GET">
	<input type="text" name="num1">
	<button type="submit" name="submit">Count</button>
</form>
<?php
if (isset($_GET['num1'])) {
	if (is_numeric($_GET['num1'])) {
		$n1 = $_GET['num1'];
		$lastNum = $n1 + 10;
		for ($i=$n1; $i <= $lastNum; $i++) { 
			echo "Count: $i<br/>";
		}
	} else {
		echo "The textbox dont recieve a number value";
	}
}
?>

<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>