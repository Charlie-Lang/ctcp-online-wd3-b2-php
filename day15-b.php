<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Arrays and Things - 3</title>
</head>
<body class="container">
<div class="row">
<div class="col">
<?php
$tomCruiseBio = array('Full Name' => "Thomas Cruise Mapother IV"
	,"Birthdate" => "July 3, 1962"
	,"Occupation" => "Actor . Producer"
	,"Years active" => "1981–present"
	,"Children" => "3");
echo $tomCruiseBio["Full Name"] . "<br/>";
var_dump($tomCruiseBio);
?>
</div>
<div class="col">
<table class="table table-dark">
<?php
foreach ($tomCruiseBio as $key => $value) {
	echo "
<tr>
	<td>$key</td>
	<td>$value</td>
</tr>";
}
?>
</table>
</div>
</div>
<?php

?>
<div class="row">
<div class="col">

</div>
<div class="col">
</div>
</div>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>