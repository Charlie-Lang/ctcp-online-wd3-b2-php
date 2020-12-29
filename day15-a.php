<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Arrays and Things - 2</title>
</head>
<body class="container">
<div class="row">
<div class="col">
<?php
$pets = array("dog"
	,"cat"
	,"bird"
	,"fish"
	,"hamster");
var_dump($pets);
echo "<ul>";
for ($i=0; $i < count($pets); $i++) { 
	 echo "<li>$pets[$i]</li>";
}
echo "</ul>";
?>
</div>
<div class="col">
<?php
echo "<ol>";
for ($i=count($pets)-1; $i >= 0; $i--) { 
	 echo "<li>$pets[$i]</li>";
}
echo "</ol>";
?>
</div>
</div>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>