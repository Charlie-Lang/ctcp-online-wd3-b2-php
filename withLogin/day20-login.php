<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
include 'connection.php'; 
$errorMessage = "";
if (isset($_POST['submit'])) {
	$username = $mysqli->real_escape_string($_POST['uname']);
	$password = $mysqli->real_escape_string($_POST['pass']);

	$sqlLoginCheck = "SELECT COUNT(*),fld_uid FROM tbl_login
	WHERE fld_uname = '$username' 
	AND fld_pass = '$password'
	LIMIT 0,1";

	$result = $mysqli->query($sqlLoginCheck);
	$row = $result->fetch_row();

	if ($row[0] == 1) {
		$_SESSION['userID'] = $row[1];
		$_SESSION['userName'] = $username;
		header("Location: day20-selectPrivate.php");
	} else {
		$errorMessage = "Invalid Username or password";
	}
}

// CREATE TABLE tbl_login (
// 	fld_uid INT NOT NULL AUTO_INCREMENT 
// 	, fld_uname VARCHAR(64) NOT NULL 
// 	, fld_pass VARCHAR(128) NOT NULL 
// 	, PRIMARY KEY (fld_uid)
// ) ENGINE = InnoDB;
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<div class="row">
<div class="col"></div>
<form class="col" action="" method="POST">
<div class="mb-3">
	<label for="username" class="form-label">Username</label>
	<input class="form-control" id="username" type="text" name="uname" placeholder="username"><br/>
</div>
<div class="mb-3">
	<label for="password" class="form-label">Password</label>
	<input class="form-control" id="password" type="password" name="pass" placeholder="password"><br/>
</div>
<button class="btn btn-info" type="submit" name="submit">LOGIN</button>
</form>
<div class="col"></div>
</div>
<?php
if (isset($_POST['submit'])) {
	echo $errorMessage;
}
?>
<a href="day20-selectPrivate.php">private select</a>
<a href="day20-logout.php">logout</a>
<?php
if (isset($_SESSION['check'])) {
	echo $_SESSION['check'];
} else {
	$_SESSION['check'] = "filled;";
	echo "not here";
}
?>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
