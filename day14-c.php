<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>radio check select</title>
</head>
<body class="container">
<form action="" method="GET">
	<input type="radio" name="rad1" value="APPLE"> APPLE<br/>
	<input type="radio" name="rad1" value="BANANA"> BANANA<br/>
	<input type="radio" name="rad1" value="CANTALOUPE"> CANTALOUPE<br/>
	<input type="checkbox" name="chk1"> Agree<br/>
	<select name="drop1">
		<option>A</option>
		<option>B</option>
		<option>C</option>
	</select><br/>
	<button type="submit" name="submit">send!!!</button>
</form>
<?php
var_dump($_GET);
if (isset($_GET['submit'])) {
	$chk1res = isset($_GET['chk1']);
	echo "chk1 status: $chk1res";
}
?>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>