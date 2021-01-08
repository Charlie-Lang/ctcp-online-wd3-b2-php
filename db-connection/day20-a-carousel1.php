<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<a href="day17-d-select.php" class="btn btn-primary">view all items</a>
<a href="day19-a-fileUploadForm.php" class="btn btn-success">add new image</a>
<hr/>
<div id="pictureTable" class="carousel carousel-dark slide" data-bs-ride="carousel">
<ol class="carousel-indicators">
<?php
$sqlCount = "SELECT COUNT(*) FROM tbl_image";
$countResult = $mysqli->query($sqlCount);
$rowCount = $countResult->fetch_array();

$totalRow = $rowCount[0];
$active ='class="active"';

for ($i=0; $i < $totalRow; $i++) { 
	echo "<li data-bs-target='#pictureTable' data-bs-slide-to='$i' $active></li>";
	$active = "";
}

?>

</ol>
<div class="carousel-inner">
<?php
$sqlQuery = "SELECT * FROM tbl_image";

$result = $mysqli->query($sqlQuery);

$active="active";
while ($row = $result->fetch_assoc()) {
	echo "
<div class='carousel-item $active'>
	<img src='../uploads/".$row['fld_imgname']."' class='d-block img-fluid mx-auto h-100' alt='id=".$row['fld_imgid']."'>
	<div class='carousel-caption d-none d-md-block'>
		<p>".$row['fld_imgid']." - ".$row['fld_imgnotes']."</p>
	</div>
</div>";
$active="";
}
?>
</div>
<a class="carousel-control-prev" href="#pictureTable" role="button" data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
</a>
<a class="carousel-control-next" href="#pictureTable" role="button" data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
</a>
</div>

<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>

