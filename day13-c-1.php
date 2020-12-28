<?php
echo "How did you get here?";
$return="day13-c.php?";
$result="";
if (isset($_GET['submit'])) {
	if (is_numeric($_GET['txt1'])) {
		$txt1=$_GET['txt1'];
		$txt+=100;
		$result="result=$txt1&";
	} else {
		$result="result=Value is not a number.&";
	}	
	$return.=$result;
}
header("Location: $return");
?>