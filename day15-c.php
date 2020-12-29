<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Arrays and Things - 4</title>
</head>
<body class="container">
<?php
$president = array(
	"12th" => array(
		"Name" => "Fidel V. Ramos"
		,"Start Term" => "June 30, 1992"
		,"End Term" => "June 30, 1998"
		,"Party" => "Lakas"
	)
	,"13th" => array(
		"Name" => "Joseph Estrada"
		,"Start Term" => "June 30, 1998"
		,"End Term" => "January 20, 2001"
		,"Party" => "LAMMP"
	)
	,"14th" => array(
		"Name" => "Gloria Macapagal Arroyo"
		,"Start Term" => "January 20, 2001"
		,"End Term" => "June 30, 2010"
		,"Party" => "Lakas"
	)
	,"15th" => array(
		"Name" => "Benigno Aquino III"
		,"Start Term" => "June 30, 2010"
		,"End Term" => "June 30, 2016"
		,"Party" => "Liberal"
	)
	,"16th" => array(
		"Name" => "Rodrigo Duterte"
		,"Start Term" => "June 30, 2016"
		,"Party" => "PDP–Laban"
	)
	,"17th" => array(
		"Name" => "???"));
var_dump($president);
?>
<hr/>
<div class="row">
<div class="col">
<h3>for each vardump</h3>
<?php
foreach ($president as $key => $value) {
	echo "<h5>$key President: <br/></h5>";
	var_dump($value);
	echo "<hr/>";
}
?>
</div>
</div>

<div class="row">
<h4>info of president on a list</h4>
<?php
foreach ($president as $nth => $bio) {
	echo "
	<div class='col-xs'>
	<h5>$nth President: <br/></h5>
	<ul>";
	foreach ($bio as $key => $value) {
		echo "<li>$key: $value</li>";
	}
	echo "</ul>
	</div>";
}
?>
</div>
<hr/>
<div class="row">
<div class="col">
<h4>info of president on a table</h4>
<table class="table table-dark table-striped table-bordered border-primary">
	<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Start Term</th>
		<th>End Term</th>
		<th>Party</th>
	</tr>
<?php
foreach ($president as $nth => $bio) {
	echo "<tr>
	<td>$nth</td>";
	foreach ($bio as $key => $value) {
		echo "<td>$value</td>";
	}
	echo "</tr>";
}
?>
</table>
</div>
</div>
<hr/>
<div class="row">
<div class="col">
<h4>info of president on a table</h4>
<table class="table table-info table-striped table-bordered border-primary">
	<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Start Term</th>
		<th>End Term</th>
		<th>Party</th>
	</tr>
<?php
foreach ($president as $nth => $bio) {
	echo "<tr>
	<td>$nth</td>";
	if (isset($bio['Name'])) {
		echo "<td>".$bio['Name']."</td>";
	} else {
		echo "<td></td>";
	}
	if (isset($bio['Start Term'])) {
		echo "<td>".$bio['Start Term']."</td>";
	} else {
		echo "<td></td>";
	}
	if (isset($bio['End Term'])) {
		echo "<td>".$bio['End Term']."</td>";
	} else {
		echo "<td></td>";
	}
	if (isset($bio['Party'])) {
		echo "<td>".$bio['Party']."</td>";
	} else {
		echo "<td></td>";
	}
	echo "</tr>";
}
?>
</table>
</div>
</div>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>