<?php
session_start();
if (isset($_SESSION['check'])) {
	unset($_SESSION);
}
session_destroy();
header("Location: index.php");
?>
<a href="day20-login.php">login</a>
<a href="day20-selectPrivate.php">private select</a>