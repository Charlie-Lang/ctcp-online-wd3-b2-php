<?php
$target_dir = "uploads/";
$target_file = $target_dir .round(microtime(true)). basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$resultMessage = "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
		$resultMessage.="File is an image - " . $check["mime"] . ".<br/>";
		$uploadOk = 1;
	} else {
		$resultMessage.="File is not an image.<br/>";
		$uploadOk = 0;
	}
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 2500000) {
	$resultMessage.="Sorry, your file is too large.<br/>";
	$uploadOk = 0;
} 

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif") {
  $resultMessage.="Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br/>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $resultMessage.="Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $resultMessage="The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    $resultMessage.="Sorry, there was an error uploading your file.";
  }
}
header("Location: day18-b-uploadForm.php?result=$resultMessage");
?>