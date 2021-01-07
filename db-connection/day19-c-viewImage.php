<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<a href="day17-d-select.php" class="btn btn-primary">view all items</a><hr/>
<div class="row">
<?php
$sqlQuery = "SELECT * FROM tbl_image";

$result = $mysqli->query($sqlQuery);

while ($row = $result->fetch_assoc()) {
	echo "
<div class='col-xs-6 card'>
	<img src='../uploads/".$row['fld_imgname']."' class='card-img-top w-50 rounded mx-auto' alt='id=".$row['fld_imgid']."'>
	<div class='card-body'>
		<p class='card-text'>".$row['fld_imgnotes']."</p>
	</div>
</div>";
}
?>
</div>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>