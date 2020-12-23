<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<form action="" method="GET">
	<input type="text" name="txt1">
	<button type="submit" name="submit">Send</button>
</form>
<?php
if (isset($_GET['submit'])) {
	$txt1=$_GET['txt1'];
	//$_POST['input_name'] if post method
	echo "txt1 input value: <u>$txt1</u>";
}
?>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>