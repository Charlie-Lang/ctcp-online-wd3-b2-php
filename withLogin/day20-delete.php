<?php 
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
include 'connection.php';
$username = "welcome";
if (isset($_SESSION['userID'])) {
	$username = $_SESSION['userName'];
} else {
	header("Location: day20-logout.php");
}

if (isset($_GET['submit']) && isset($_SESSION['userID'])) {
// to declare all items to be used in the sql query
$pid=$mysqli->real_escape_string($_GET['pid']);

// variables to check and recieve the output
$resultMessage=""; //SQL query is executed
$runQuery=true; //we will change it to false to stop the sql query from executing

//filters

// the sql query that will be executed
$sqlQuery="DELETE FROM 
	tbl_sample3
WHERE fld_id='$pid'";

// echo "$sqlQuery";

if ($runQuery) {
	$result = $mysqli->query($sqlQuery);
	if ($result == true) {
		$resultMessage = "Row Deleted";
	} else {
		$resultMessage = "Delete failed";
	}
}else {
	$resultMessage .= "Delete Query Failed<br/>";
}

// echo "$resultMessage";
header("Location: day20-selectPrivate.php?result=$resultMessage");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<h1 class="bg-danger text-center"><ins class="text-white">DELETE</ins> Row</h1>
<?php
if (isset($_GET['id'])) {
	$id = $mysqli->real_escape_string($_GET['id']);
	$sqlQuery = "SELECT * FROM tbl_sample3 WHERE fld_id = $id LIMIT 0,1";
	$result = $mysqli->query($sqlQuery);
	$row = $result->fetch_assoc();
}
?>
<form action="" method="GET">
<table class="table table-danger">
	<tr>
		<td>Product Name:</td>
		<td><?php
		if (isset($_GET['id'])) {
			echo $row['fld_product'];
		}
		?></td>
	</tr>
	<tr>
		<td>Category:</td>
		<td><?php
		if (isset($_GET['id'])) {
			echo $row['fld_category'];
		}
		?></td>
	</tr>
	<tr>
		<td>Product Price:</td>
		<td><?php
		if (isset($_GET['id'])) {
			echo $row['fld_price'];
		}
		?></td>
	</tr>
	<tr>
		<td>Product Quantity:</td>
		<td><?php
		if (isset($_GET['id'])) {
			echo $row['fld_quantity'];
		}
		?></td>
	</tr>
</table>
<button class="btn btn-danger" type="submit" name="submit">DELETE</button>
<input type="hidden" name="pid" value="<?php
if (isset($_GET['id'])) {
	echo $row['fld_id'];
}
?>">
<a href="day20-selectPrivate.php">Cancel</a>
</form>



<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
    include "connection.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $age = $conn->real_escape_string($_POST['age']);
    $position = $conn->real_escape_string($_POST['position']);
    $salary = $conn->real_escape_string($_POST['salary']);
    
    $sqlInsert = "INSERT INTO
    tblemployee
    (Emp_Name
    ,Emp_Age
    ,Position
    ,Salary)
    VALUES
    ('$name'
    ,'$age'
    ,'$position'
    ,'$salary')";

    echo "$sqlInsert";

    if ($conn->query($sqlInsert)) {
    echo "Record Success";
    } else {
    echo "Record Failed";
    }
    } else {
    	echo "asknakjsdfk ja";
    }
?>

</head>
<body>
<form action="" method="POST">
    Name:<input type="text" name="name"><br>

    Age:<input type="text" name="age"><br>

    Position:<input type="text" name="position"><br>

    Salary:<input type="text" name="salary"><br>

    <input type="submit" name="submit" value="Record">
</form>
</body>
</html>