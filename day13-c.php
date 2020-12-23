<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<h1>Using the action attribute</h1>
<form action="day13-c-1.php" method="GET">
	Enter a number:
	<input type="text" name="txt1"><br/>
	<button type="submit" name="submit">Send</button>
</form>
<?php
if (isset($_GET['result'])) {
	echo "returned value: " . $_GET['result'];
}
?>

<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>