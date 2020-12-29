<!DOCTYPE html>
<?php
function calculate ($num1, $num2, $op) {
	$result="";

	if ($op == "+") {
		$result = $num1 + $num2;
	} elseif ($op == "-") {
		$result = $num1 - $num2;
	} elseif ($op == "*") {
		$result = $num1 * $num2;
	} elseif ($op == "/") {
		$result = $num1 / $num2;
	}

	echo "$num1 $op $num2 = $result";
}

function calculate2 ($n1, $n2, $op) {
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
}

function getLargest($num1, $num2, $num3) {
	$largest=0;

	if ($num1 > $num2) {
		$largest = $num1;
	} else {
		$largest = $num2;
	}

	if ($largest < $num3) {
		$largest = $num3;
	}

	return "$largest is the biggest number out of $num1, $num2, $num3";
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Functions</title>
</head>
<body class="container">
<div class="row">
<div class="col-sm bg-info">
<h1>Uses echo</h1>
<?php
	echo "<h1>";
	calculate(12, 14, "+");
	echo "</h1>";
	echo "<h2>";
	echo calculate(34, 11, "/");
	echo "</h2>";
	$out = calculate2(22, 14, "*");
	echo "<hr/> $out";
?>
</div>
<div class="col-sm bg-warning">
<h1>uses return</h1>
<?php
echo "<h2>".getLargest(12,14,55)."</h2>";
$out = getLargest(32,23,31);
echo "$out";
echo "<h3>".strtoupper(getLargest(12,25,19))."</h3>";
?>
</div>
</div>

<div class="row">
<div class="col-sm">
<form>
	<input type="radio" name="rad1" value="1" checked>1 &nbsp; &nbsp; &nbsp;
	<input type="radio" name="rad1" value="2">2
	&nbsp; &nbsp; &nbsp;
	<input type="radio" name="rad1" value="3">3
	&nbsp; &nbsp; &nbsp;
</form>
</div>
</div>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>