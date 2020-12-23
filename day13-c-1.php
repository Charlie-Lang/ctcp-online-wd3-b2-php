<?php
echo "How did you get here?";
$return="?result=";
$result="";
if (isset($_GET['submit'])) {
	if (is_numeric($_GET['txt1'])) {
		$txt1=$_GET['txt1'];
		$result=$txt1+100;
	} else {
		$result="Value is not a number.";
	}	
	$return.=$result;
}
header("Location: day13-c.php$return");
?>