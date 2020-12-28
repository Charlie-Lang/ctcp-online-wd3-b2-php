<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Up or Down Counter</title>
</head>
<body class="container">
<form action="" method="GET">
Enter number here: <input type="text" name="num1"><br/>
<input type="radio" name="count" value="up">▲<br/>
<input type="radio" name="count" value="down">▼<br/>
Count up or down to how many number: <input type="text" name="num2" value="10"><br/>
<button type="submit" name="submit">Count</button>
</form>
<?php
if (isset($_GET['submit'])) {
	$n1 = $_GET['num1'];
	$direction = $_GET['count'];
	$countTo = $_GET['num2'];;
	switch ($direction) {
		case 'up':
			$lastNum = $n1 + $countTo;
			for ($i=$n1; $i <= $lastNum; $i++) { 
				echo "Count: $i<br/>";
			}
			break;
		case 'down':
			$lastNum = $n1 - $countTo;
			for ($i=$n1; $i >= $lastNum; $i--) { 
				echo "Count: $i<br/>";
			}			
			break;		
		default:
			# code...
			break;
	}
}
?>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>