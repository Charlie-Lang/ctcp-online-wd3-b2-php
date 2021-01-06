<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">

<form action="day18-c-upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
<hr/>
<?php
if (isset($_GET['result'])) {
	echo $_GET['result'];
}
?>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>