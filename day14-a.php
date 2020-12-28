<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>for loop</title>
</head>
<body class="container">
<div class="row">
<div class="col bg-warning">
<h3>count up</h3>
<ol>
<?php
for ($i=1; $i <= 10; $i++) { 
	echo "<li>Hello!!! - $i</li>";
}
?>
</ol>
</div>
<div class="col bg-info">
<h3>count down</h3>
<ol>
<?php
for ($j=10; $j > 0; $j--) { 
	echo "<li>Down \/ - $j</li>";
}
?>

</div>
</div>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>