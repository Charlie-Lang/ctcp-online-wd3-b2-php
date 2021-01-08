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
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title></title>
</head>
<body class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="day20-insert.php">INSERT QUERY</a>
        </li>
      </ul>
      <li class="nav-item dropdown d-flex">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            	echo $username;
            ?>
          </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li class="nav-item">
            <a class="nav-link" href="day20-logout.php">LOGOUT</a>
          </li>
        </ul>
      </li>
    </div>
  </div>
</nav>

<hr/>
<?php
$rowPerPage = 5;
$sqlWhere = "1";
$sqlOrder = "ORDER BY fld_id";
$sqlLimit = "LIMIT 0,$rowPerPage";
$searchParams="";
$sortParams="";
// SEARCH COMMAND
if (isset($_GET['search'])) {
$search="'%".$mysqli->real_escape_string($_GET['search'])."%'";
$searchBy=$mysqli->real_escape_string($_GET['searchBy']);
$fldName="";
switch ($searchBy) {
	case 'Product Name':
		$fldName="fld_product";
		break;
	case 'Category':
		$fldName="fld_category";
		break;
	default:
		$fldName="fld_product";
		break;
}
$searchParams="&search=".$_GET['search']."&searchBy=".$_GET['searchBy'];
$sqlWhere = $fldName . " LIKE " . $search;
}
// SORT COMMAND
if (isset($_GET['sort'])) {
	switch ($mysqli->real_escape_string($_GET['sort'])) {
		case 'name':
			$sqlOrder = "ORDER BY fld_product";
			break;
		case 'cat':
			$sqlOrder = "ORDER BY fld_category";
			break;
		case 'price':
			$sqlOrder = "ORDER BY fld_price";
			break;
		case 'qty':
			$sqlOrder = "ORDER BY fld_quantity";
			break;
		default:
			$sqlOrder = "ORDER BY fld_id";
			break;
	}
	$sortParams="&sort=".$_GET['sort'];
}
// PAGE COMMAND
if (isset($_GET['page'])) {
	$page=($mysqli->real_escape_string($_GET['page'])-1)*$rowPerPage;
	$sqlLimit = "LIMIT $page,$rowPerPage";
}

$sqlQuery = "SELECT * FROM tbl_sample3 WHERE $sqlWhere $sqlOrder $sqlLimit";
?>
<div class="row">
	<h1 class="col bg-warning">With Search</h1>
	<h1 class="col bg-success">With Sorting</h1>
	<h1 class="col bg-primary">With Page Numbers</h1>	
	<h1 class="col bg-info">With Update Delete Button</h1>	
</div>
<form action="" method="GET">
	Search: <input type="text" name="search">
	Search By:
	<select name="searchBy">
		<option>Product Name</option>
		<option>Category</option>
	</select>
	<button type="submit" name="submit">SEARCH</button>
</form>
<table class="table table-dark table-stripped">
<thead>
	<tr>
		<th>ID</th>
		<th><a href="?sort=name<?php echo $searchParams; ?>">
			Product Name
		</a></th>
		<th><a href="?sort=cat<?php echo $searchParams; ?>">
			Category
		</a></th>
		<th><a href="?sort=price<?php echo $searchParams; ?>">
			Price
		</a></th>
		<th><a href="?sort=qty<?php echo $searchParams; ?>">
			Quantity
		</a></th>
		<th colspan="2"></th>
	</tr>
</thead>
<tbody>
<?php
$result = $mysqli->query($sqlQuery);
echo "$sqlQuery";
echo "<hr/>";
while ($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>".$row['fld_id']."</td>";
	echo "<td>".$row['fld_product']."</td>";
	echo "<td>".$row['fld_category']."</td>";
	echo "<td>".$row['fld_price']."</td>";
	echo "<td>".$row['fld_quantity']."</td>";
	echo "<td><a href='day17-e-update.php?id=".$row['fld_id']."'>Update</a></td>";
	echo "<td><a href='day18-a-delete.php?id=".$row['fld_id']."'>Delete</a></td>";
	echo "</tr>";
}
?>
</tbody>
</table>
<?php
$sqlQuery2 = "SELECT COUNT(*) FROM tbl_sample3 WHERE $sqlWhere $sqlOrder";
$result = $mysqli->query($sqlQuery2);
$row = $result->fetch_row();
$countResult=$row[0];
$totalPages=intdiv($countResult, $rowPerPage);
if ($countResult % $rowPerPage > 0) {
	$totalPages++;
}
$previousPage = 1;
$nextPage=$totalPages;
if (isset($_GET['page'])) {
	$currentPage=$mysqli->real_escape_string($_GET['page']);
	$previousPage = $currentPage-1;
	$nextPage=$currentPage+1;
	if ($currentPage <= 1) {
		$previousPage = 1;
	} elseif ($currentPage >=$totalPages) {
		$nextPage=$totalPages;
	}
}
?>
<nav aria-label="Table pages">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="<?php
      echo "?$sortParams&$searchParams&page=$previousPage";
      ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
<?php
for ($i=1; $i <= $totalPages; $i++) { 
	echo "<li class='page-item'><a class='page-link' href='?$sortParams&$searchParams&page=$i'>$i</a></li>";
}

?>
    <li class="page-item">
      <a class="page-link" href="<?php
      echo "?$sortParams&$searchParams&page=$nextPage";
      ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
<?php
if (isset($_GET['result'])) {
	echo $_GET['result'];
}
?>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>