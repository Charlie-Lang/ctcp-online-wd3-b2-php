<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<h1>Using POST Method</h1>
<form action="" method="POST">
	<input type="text" name="txt1" placeholder="text">
	<input type="password" name="pass1" placeholder="password">
	<button type="submit" name="submit">Send</button>
</form>
<?php
if (isset($_POST['submit'])) {
	$txt1=$_POST['txt1'];
	$pass1=$_POST['pass1'];
	//$_POST['input_name'] if post method
	echo "txt1 input value: <u>$txt1</u>";
	echo "pass1 input value: <u>$pass1</u>";
}
?>

<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>