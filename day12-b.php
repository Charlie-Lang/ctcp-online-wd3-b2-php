<!DOCTYPE html>
<html>
<head>
	<title>if elseif sample</title>
</head>
<body>
<h1>sample for calculator</h1>
<?php
//for calculator using if else
$n1="17";
$n2="12";
$op="/";
$result="";

if ($op == "+") {
	$result = $n1 + $n2;
} elseif ($op == "-") {
	$result = $n1 - $n2;
} elseif ($op == "*") {
	$result = $n1 * $n2;
} elseif ($op == "/") {
	$result = $n1 / $n2;
}

echo "$n1 $op $n2 = $result";
?>
<hr/>
<h1>sample for number comparison</h1>
<?php
$num1=25;
$num2=19;
$num3=22;
$largest=0;

if ($num1 > $num2) {
	$largest = $num1;
} else {
	$largest = $num2;
}

if ($largest < $num3) {
	$largest = $num3;
}

echo "The largest number is $largest";

// code below will work
// if ($num1 > $num2) {
// 	if ($num1 > $num3) {
// 		$largest = $num1;
// 	} else {
// 		$largest = $num3;
// 	}
// } else {
// 	if ($num2 > $num3) {
// 		$largest = $num2;
// 	} else {
// 		$largest = $num3;
// 	}
// }


?>

</body>
</html>