<?php
session_start();

if (isset($_SESSION['userName'])) {
	$session_user = $_SESSION['userName'];
}
else{
	header('Location:LoginPage.php');
}
session_destroy();
header('Location:LoginPage.php');
?>