<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<a href="day17-d-select.php" class="btn btn-primary">view all items</a><hr/>
<form action="day19-b-fileUploadCode.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"><br/>
  Notes:<br/>
  <textarea name="notes" placeholder="notes about the picture" cols="70"></textarea>
  <input type="submit" value="Upload Image" name="submit">
</form>
<hr/>
<?php
if (isset($_GET['result'])) {
	echo $_GET['result'];
}
?>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>