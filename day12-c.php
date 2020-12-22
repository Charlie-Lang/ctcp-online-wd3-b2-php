<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>calculator code from day12-b.php using switch statement</h1>
<?php
$n1="17";
$n2="12";
$op="/";
$result="";

switch ($op) {
	case '+':
		$result = $n1 + $n2;
		break;
	case '-':
		$result = $n1 - $n2;
		break;
	case '*':
		$result = $n1 * $n2;
		break;
	case '/':
		$result = $n1 / $n2;
		break;
	default:
		# code...
		break;
}

echo "$n1 $op $n2 = $result";
?>
</body>
</html>